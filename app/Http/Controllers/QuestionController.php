<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    public function index(){
        $questions = DB::table('questions')->get();

        //$questions = \App\question::notEmpty();

        $view= view('questions.index');
        $view->questions = $questions;
        return $view;

     }

    public function show($id){
        // $question = DB::table('questions')->find($id);
        // $question = DB::table('questions')->where('id', $id)->first();
        // $question = DB::table('questions')->where('id', '=', $id)->first();
        $question = \App\Questions::find($id);

        //create a new view object
        $view = view('questions.show');
        $view->question = $question;

        //return view
        return $view;
    }
}
