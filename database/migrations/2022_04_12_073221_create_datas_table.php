<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('dateofbirth');
            $table->string('gender');

            $table->string('address');
            $table->string('kel');
            $table->string('kec');
            $table->string('city');
            $table->string('province');

            $table->string('degree');
            $table->string('school');
            $table->string('study');
            $table->string('graduation');
            $table->string('gpa');

            $table->string('cv');
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
        Schema::dropIfExists('datas');
    }
};
