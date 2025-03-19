<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Dictionary;
use Illuminate\Http\Request;


class DictionaryController extends Controller
{
    public function index()
    {
        $words = Dictionary::all();
        return view('dictionary', compact('words'));
    }

    public function show($id)
    {
        $word = Dictionary::findOrFail($id); 
        return view('dictionaryword', compact('word')); 
    }
}
