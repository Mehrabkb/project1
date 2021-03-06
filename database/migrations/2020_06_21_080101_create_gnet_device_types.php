<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGnetDeviceTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device_types', function (Blueprint $table) {
            $table->bigIncrements('device_type_id');
            $table->unsignedBigInteger('device_type_name_id');
            $table->decimal('type_price' , 8 , 0);
            $table->unsignedBigInteger('gnet_id');
            $table->integer('joystick_count');
            $table->timestamps();

            $table->foreign('device_type_name_id')->references('device_type_name_id')->on('device_type_names')->onDelete('cascade');
            $table->foreign('gnet_id')->references('gamenet_id')->on('gamenets')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gnet_device_types');
    }
}
