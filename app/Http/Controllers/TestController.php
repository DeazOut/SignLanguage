<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Questions;
use App\Models\Lessons;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $questions = Questions::where();
        
        // return view('test', ['questions'=>$questions]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        session()->forget(['current_question_index', 'counter', 'questionIds', 'questions']);
        $question_id = DB::table('lessonsquestions')
            ->select(DB::raw('* FROM lessonsquestions'));
        
            
        $question = DB::table('questions')
            ->selectRaw('question FROM questions WHERE id in question_id');

        // $current_question_id = question_id[1];
        // $current_question = question[1];
        

        return view('test', compact('lesson_id'));
    }

    

    public function startTest($lesson_id)
        {
        $questionIds = DB::select('SELECT questions_id FROM lessonsquestions WHERE lessons_id = ?', [$lesson_id]);
        $questionIds = array_map(fn($item) => $item->questions_id, $questionIds);

        if (empty($questionIds)) {
            return response()->json(['error' => 'No questions found for this lesson.'], 404);
        }
        
        $placeholders = implode(',', array_fill(0, count($questionIds), '?'));
        $questions = DB::select("SELECT id, question FROM questions WHERE id IN ($placeholders)", $questionIds);

        $questions = collect($questions)->keyBy('id')->toArray();

        session([
            'lesson_id' => $lesson_id,
            'questionIds' => $questionIds,
            'questions' => $questions,
            'counter' => 0,
            'current_question_index' => 0
        ]);

        $current_question_id = $questionIds[0];
        $current_question = $questions[$current_question_id]->question;
        $current_index = array_search($current_question_id, $questionIds) + 1;
        $answers = DB::select('SELECT id, answer_image_url FROM answers WHERE questions_id = ? ORDER BY RAND()', [$current_question_id]);

        return view('test', [
            'current_question' => $current_question,
            'current_question_id' => $current_question_id,
            'lesson_id' => $lesson_id,
            'current_index' => $current_index,
            'answers' => $answers
        ]);
    }

    public function nextQuestion(Request $request, $lesson_id)
        {
            

    $counter = $request->session()->get('counter', 0);
    $questionIds = $request->session()->get('questionIds', []);
    $questions = $request->session()->get('questions', []);
    $current_question_index = $request->session()->get('current_question_index', 0);

    $current_question_id = $questionIds[$current_question_index];

    // Получаем выбранный ответ
    $selected_answer = $request->input('selected_answer');

    $answerData = DB::select('SELECT correct FROM answers WHERE questions_id = ? AND id = ?', [$current_question_id, $selected_answer]);

    if (!empty($answerData) && $answerData[0]->correct == true) {
        $counter++;
    }

    $request->session()->put('counter', $counter);

    $current_question_index++;
    $request->session()->put('current_question_index', $current_question_index);

    if ($current_question_index >= count($questionIds)) {
        $user_id = auth()->id();
        $existingRecord = DB::table('completed_lessons')
            ->where('user_id', $user_id)
            ->where('lesson_id', $lesson_id)
            ->exists();

        if (!$existingRecord) {
            DB::table('completed_lessons')->insert([
                'user_id' => $user_id,
                'lesson_id' => $lesson_id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        $percentage = ($counter / count($questionIds)) * 100;

        return view('test', [
            'percentage' => $percentage,
            'current_question_index' => $current_question_index,
            'lesson_id' => $lesson_id
        ]);
    }

    $next_question_id = $questionIds[$current_question_index];
    $next_question = $questions[$next_question_id]->question;

    $answers = DB::select('SELECT id, answer_image_url FROM answers WHERE questions_id = ? ORDER BY RAND()', [$next_question_id]);

    $current_index = $current_question_index + 1;

    return view('test', [
        'current_question' => $next_question,
        'current_question_id' => $next_question_id,
        'answers' => $answers,
        'lesson_id' => $lesson_id,
        'current_index' => $current_index,
        'counter' => $counter
    ]);
}
        
   
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

