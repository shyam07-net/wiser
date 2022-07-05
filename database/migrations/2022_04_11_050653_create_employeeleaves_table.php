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
        Schema::create('employeeleaves', function (Blueprint $table) {
            $table->id();
            $table->string('Employee');
            $table->string('Leave_type');
            $table->date('leavefrom');
            $table->date('leaveto');
            $table->integer('No_of_days');
            $table->string('Reason');
            $table->string('Status');
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
        Schema::dropIfExists('employeeleaves');
    }
};
