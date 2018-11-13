<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carsinfo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Vehicle_type');
            $table->string('Year');
            $table->string('Make');
            $table->string('Model');
            $table->string('Generation');
            $table->string('Number_of_seater');
            $table->string('Length');
            $table->string('Width');
            $table->string('Height');
            $table->string('WheelBase');
            $table->string('TrackFront');
            $table->string('TrackBack');
            $table->string('GroundClearance');
            $table->string('CurbWeight');
            $table->string('MaxTrunkCapacity');
            $table->string('Enginetype');
            $table->string('FuelType');
            $table->string('Power');
            $table->string('Torque');
            $table->string('InductionType');
            $table->string('ValvesPerCylinder');
            $table->string('GearBoxType');
            $table->string('NoOfSpeed');
            $table->string('DriveWheels');
            $table->string('Break');
            $table->string('MaxSpeed');
            $table->string('acceleration');
            $table->string('FuelConsumptionhighway');
            $table->string('FuelConsumptionTown');
            $table->string('Price');
            $table->mediumText('body');
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
        Schema::dropIfExists('carsinfo');
    }
}
