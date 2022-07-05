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
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->integer("Empid")->nullable();
            $table->string("lunchstart")->nullable();
            $table->string("lunchend")->nullable();
            $table->string("totallunch")->nullable();
            $table->string("otherstart")->nullable();
            $table->string("otherend")->nullable();
            $table->string("totalother")->nullable();
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
        Schema::dropIfExists('tests');
    }
};
