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
        Schema::create('employees__profiles', function (Blueprint $table) {
            $table->id();
            $table->string('Employee_ID');
            $table->string('First_Name');
            $table->string('Last_Name');
            $table->string('DateOfJoining');
            $table->string('Designation');
            $table->string('Gender');
            $table->string('Marital_Status');
            $table->string('DOB');
            $table->bigInteger('Mob');
            $table->string('Profile_Image');
            $table->string('Highest_Qualification');
            $table->string('Address');
            $table->string('State');
            $table->string('Country');
            $table->string('PinCode');
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
        Schema::dropIfExists('employees__profiles');
    }
};
