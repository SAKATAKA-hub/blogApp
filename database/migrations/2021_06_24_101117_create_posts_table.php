<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//------------------------------------------------------------------
// # コメント
// 6/24 'blogapp'データベースはmySQLの操作で作成した。
//
//------------------------------------------------------------------

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            // $table->string('title')->nullable(); // NULLを許可する

            $table->id();
            $table->string('title')->comment('タイトル');
            $table->text('body')->comment('本文');
            $table->timestamps(); // created_at, updated_at
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
