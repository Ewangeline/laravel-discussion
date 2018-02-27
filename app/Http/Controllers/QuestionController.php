<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Questions;

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

    public function create(){
        $view = view('questions.create');
        return $view;
    }

    public function store(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'text' => 'required',
        ]);

        $question = new Questions();
        $question->user_id =0;
        $question->question_id =0;
        $question->text = $request ->get('text');
        $question->title = $request ->get('title');
        $question->save();


    // Questions::create(request(['title','text']));
    return redirect('/questions/'. $question->id);
    }
}
