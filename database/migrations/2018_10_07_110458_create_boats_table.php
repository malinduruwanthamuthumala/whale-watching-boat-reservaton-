<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boats', function (Blueprint $table) {
            $table->increments('boat_id');
            $table->string('gov_reg_no');
            $table->string('boat type');
            $table->integer('n0_of_seats');
            $table->string('insurance_id');
            $table->string('insurance_inst');
            $table->integer('no_insured_pass');
            $table->string('bank_acc_no');
            $table->string('banned_boat');
            $table->string('view_res');
            $table->string('set_prices');
            $table->string('make_off');
            $table->string('seating_plan');
            $table->string('pay_info');
            $table->string('transaction_history');
            $table->string('banking');
            $table->string('view_avail_boats');
            $table->string('res_online');
            $table->string('complaints');
            $table->rememberToken();
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
        Schema::dropIfExists('boats');
    }
   
}
