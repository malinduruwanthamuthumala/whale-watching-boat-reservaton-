<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('invoice', function (Blueprint $table) {
            $table->increments('invoice_no')->index();
            $table->string('res_id');
            $table->string('boat_id');
            $table->integer('price');
            $table->string('payment_status');
            $table->string('check_in_status');
            $table->string('f_name');
            $table->string('l_name');
            $table->string('nic');
            $table->string('email')->unique();
            $table->date('res_date');
            $table->string('location');
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
        Schema::dropIfExists('invoice');
    }
}
