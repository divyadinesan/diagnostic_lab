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
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('booking_id');
            $table->string('test_id',126);
             $table->string('patient_id',126);
             $table->string('patient_email',126);
             $table->string('patient_name',126);
             $table->string('test_name',600);
              $table->string('test_price',600);
               $table->string('booking_date',600);
                $table->string('booking_time',600);
                $table->string('booking_status',600);
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
        Schema::dropIfExists('bookings');
    }
};
