<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('support', function (Blueprint $table) {
            $table->increments('support_id');
            $table->text('nama_support');
            $table->dateTime('detail');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('support');
    }
}