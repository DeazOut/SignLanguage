<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Models\Questions;
use App\Models\Lessons;
use Illuminate\Support\Facades\DB;

class LessonsController extends Controller
{
    public function lessons(){
        $userId = auth()->id(); 
        $completedLessons = DB::table('completed_lessons')->where('user_id', $userId)->get();

        if ($completedLessons->isEmpty()) {
            $completedLessonIds = [];
        } else {
            $completedLessonIds = $completedLessons->pluck('lesson_id')->toArray();
        }

        $lessons = Lessons::all();
        
        $completedCount = count($completedLessonIds); // Количество пройденных уроков
        $totalLessons = $lessons->count(); // Всего уроков

    return view('lessons', [
        'lessons' => $lessons,
        'completedLessonIds' => $completedLessonIds,
        'completedCount' => $completedCount,
        'totalLessons' => $totalLessons
    ]);

    }
    public function show($id){
        $lesson = Lessons::select('lessons.*', 'lessons.id as id_les')
        ->select('lessons.*', 'lessons.name as name_les')
        ->select('lessons.*', 'lessons.video_url as vid_url')   
        ->find($id);
        return view('lesson', compact('lesson'));
     }
     public function test($id)
    {
        $question = Questions::select('questions.*', 'questions.id as id_quest')
        ->select('questions.*', 'questions.image_url as imageurl_quest')  
        ->find($id);
        return view('test', compact('question'));
    }
    

}

?>