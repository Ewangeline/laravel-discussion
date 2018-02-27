<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');       //adds id, AI, PK
            $table->integer('user_id');     //adds user_id (int(11))
            $table->integer('question_id');//adds questions_id (int(11))
            $table->string('title', 255);   //adds title (varchar(255))
            $table->text('text');           //adds (TEXT)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
