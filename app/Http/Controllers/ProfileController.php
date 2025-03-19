<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;


class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();

        $name_user = $user->name;
        $email_user = $user->email;
        $password_user = $user->password_get_info;

        $totalLessons = DB::table('lessons')->count();
        $completedLessons = DB::table('completed_lessons')
            ->where('user_id', $user->id)
            ->count(); 

        $progressPercentage = $totalLessons > 0 ? round(($completedLessons / $totalLessons) * 100) : 0; 

        return view('profile', compact(
            'name_user',
            'email_user',
            'password_user',
            'totalLessons',
            'completedLessons',
            'progressPercentage'
        ));
    }
}