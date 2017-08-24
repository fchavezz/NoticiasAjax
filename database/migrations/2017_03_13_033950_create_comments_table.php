<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->text('comment');
            $table->integer('status');
            $table->timestamp('appoved_at');
            $table->timestamps();
            $table->integer('post_id')->unsigned();
            $table->integer('uscomment_id')->unsigned();
            $table->integer('admin_id')->unsigned();
            $table->foreign('uscomment_id')->references('id')->on('users_comments');
            $table->foreign('admin_id')->references('id')->on('users');
            $table->foreign('post_id')->references('id')->on('posts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
