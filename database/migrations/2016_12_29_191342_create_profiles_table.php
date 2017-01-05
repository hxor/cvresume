<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->enum('gender', ['m', 'f', 'o']);
            $table->date('birthdate');
            $table->string('add_street');
            $table->string('add_city');
            $table->string('add_stat');
            $table->string('add_postcode');
            $table->String('add_country');
            $table->string('title');
            $table->string('email');
            $table->string('phone');
            $table->text('description');
            $table->text('interest');
            $table->text('photo')->nullable()->default(NULL);
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
