<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name_th')->nullable();
            $table->string('first_name_en');
            $table->string('last_name_en');
            $table->string('last_name_th')->nullable();
            $table->string('position')->nullable();
            $table->text('selected_publication')->nullable();
            $table->string('research_interests')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('qualifications')->nullable();
            $table->text('detail')->nullable();
            $table->string('image_path')->nullable();
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
        Schema::drop('user_profiles');
    }
}
