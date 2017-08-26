<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;



/*
CREATE TABLE posts(
   id int unsigned not null auto_increment,
    title VARCHAR(100),
    body text,
    enabled TINYINT,
    primary key(id)

);
*/

class CreatePosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function($t) {
            $t->increments('id');
            $t->string('title', 100);
            $t->text('body');
            $t->string('slug', 200);
            $t->boolean('enabled');
            $t->timestamp();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Scheme::drop('posts');
    }
}
