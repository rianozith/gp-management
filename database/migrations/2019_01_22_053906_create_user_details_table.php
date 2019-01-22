<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->integer('phone')->nullable();
            $table->string('address')->nullable();
            $table->date('birth_of_date')->nullable();
            $table->string('birth_of_place')->nullable();
            $table->string('class')->nullable();
            $table->integer('age')->nullable();
            $table->string('father')->nullable();
            $table->string('mother')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {       
        Schema::table('user_details', function (Blueprint $table) {
            $table->dropForeign('user_details_user_id_foreign');
            $table->dropIndex('user_details_user_id_foreign');
        });
        Schema::dropIfExists('user_details');
    }
}
