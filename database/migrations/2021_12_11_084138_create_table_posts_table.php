<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateTablePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            /*$table->integer('users_id');*/
            $table->string('name', 255)->nullable();
            $table->string('content', 1000)->nullable();
            $table->string('image')->nullable();
            $table->string('image2')->nullable(); /*投稿画像数追加*/
            $table->string('image3')->nullable(); /*投稿画像数追加*/
            $table->string('image4')->nullable(); /*投稿画像数追加*/
            $table->string('image5')->nullable(); /*投稿画像数追加*/
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
