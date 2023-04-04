<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
     /*
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('emp_id');
            $table->string('emp_fname');
            $table->string('emp_lname');
            $table->string('emp_email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            $table->string('emp_password');
            $table->string('emp_gender');
            $table->string('emp_picture');
            $table->unsignedbiginteger('emp_dep_id');
            // $table->rememberToken();
            $table->timestamps();

            $table->foreign('emp_dep_id')->references('dep_id')->on('departments');
        });
    }

    /*
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
