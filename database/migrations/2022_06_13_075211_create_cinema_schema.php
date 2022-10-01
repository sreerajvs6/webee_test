<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCinemaSchema extends Migration
{

    public function up()
    {
        Schema::create('movies', function($table) {
            $table->increments('id');
            $table->string('film_name');
            $table->string('film_time');
            $table->string('film_book_count');
            $table->string('film_book_status');
            $table->timestamps();
        });

        Schema::create('admin', function($table) {
            $table->increments('id');
            $table->string('film_name');
            $table->string('film_run_time');
            $table->string('film_run_locs');
            $table->timestamps();
        });

        Schema::create('prices', function($table) {
            $table->increments('id');
            $table->string('show_id');
            $table->string('seat_type1_amnt');
            $table->string('seat_type2_amnt');
            $table->string('show_total_amnt');
            $table->timestamps();
        });

        Schema::create('seats', function($table) {
            $table->increments('id');
            $table->string('seat_no');
            $table->string('seat_type');
            $table->string('seat_availability');
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
    }
}
