<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question__answers', function (Blueprint $table) {
            $table->id();
            $table->integer('sub_id');
            $table->string('quation')->nullable();
            $table->string('op_1')->nullable();
            $table->string('op_2')->nullable();
            $table->string('op_3')->nullable();
            $table->string('op_4')->nullable();;
            $table->string('ans')->nullable();
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
        Schema::dropIfExists('question__answers');
    }
}
