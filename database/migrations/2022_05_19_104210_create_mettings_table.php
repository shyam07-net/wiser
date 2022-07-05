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
        Schema::create('mettings', function (Blueprint $table) {
            $table->id();
            $table->integer('Emp_id');
            $table->integer('To_emp');
            $table->string('org_name');
            $table->string('location');
            $table->string('Schedule_Time');
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
        Schema::dropIfExists('mettings');
    }
};
