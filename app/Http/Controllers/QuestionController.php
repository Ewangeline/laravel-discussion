<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    public function index(){
        $questions = DB::table('questions')->get();

        $view= view('questions.index');
        $view->questions = $questions;
        return $view;

     }

    public function show(){
        $view = view('questions.show');
        return $view;
    }
}
