<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_posts', function (Blueprint $table) {
            $table->id();

            $table->unsignedSmallInteger('user_id');
            $table->unsignedSmallInteger('post_id');
            $table->timestamps();
            $table->index('user_id', 'user_post_user_idx');
            $table->index('post_id', 'user_post_post_idx');
            $table->foreign('user_id', 'user_post_user_fk')->on('users')
            ->references('id');
            $table->foreign('post_id', 'user_post_post_fk')->on('posts')
            ->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_user_posts');
    }
};
