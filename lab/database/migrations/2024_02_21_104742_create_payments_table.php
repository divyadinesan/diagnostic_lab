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
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('payment_id');
            $table->string('booking_id',126);
             $table->string('test_id',126);
             $table->string('test_name',126);
             $table->string('patient_id',126);
             $table->string('price',600);
              $table->string('card_name',600);
               $table->string('card_number',600);
                $table->string('cvc',600);
                $table->string('expiry_date',600);
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
        Schema::dropIfExists('payments');
    }
};
