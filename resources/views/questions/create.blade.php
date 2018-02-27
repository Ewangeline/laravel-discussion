@extends('questions.layout')


@section('content')
<section id="banner">
    <div class="container">
        <h1>Create a question</h1>

    </div>
</section>

<section id="questions">
    <div class="container">

                    {!! Form::open(['action' => 'QuestionController@store']) !!}

                    <div class="form-row">
                    <label for="">Title
                    {!! Form::text('title') !!}
                    </label>
                    </div>

                    <div class="form-row">
                    <label for="">Text
                    {!! Form::text('text') !!}
                    </label>
                    </div>

                    <div class="form-row">
                    {!! Form::submit('Place a question') !!}
                    </div>

                    {!! Form::close() !!}
    </div>
</section>
@endsection