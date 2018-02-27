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

    public function show($id){
        $question = DB::table('questions')->find($id);
        $view = view('questions.show');
        $view->question = $question;
        return $view;
    }
}
