<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateTopicsTable extends Migration
{
    public function up()
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->increments('topic_id');
            $table->string('topic_subject', 255);
            $table->dateTime('topic_date');
            $table->integer('topic_cat')->unsigned();
            $table->integer('topic_by')->unsigned();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('topics');
    }
}