<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->index();
            $table->integer('signup_bonus');
            $table->integer('available_balance')->default(0);
            $table->integer('refferal_earnings')->default(0);
            $table->integer('blogging_earnings')->default(0);
            $table->integer('trivia_earnings')->default(0);
            $table->integer('ammount_withdrawn')->default(0);
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
        Schema::dropIfExists('profiles');
    }
}
