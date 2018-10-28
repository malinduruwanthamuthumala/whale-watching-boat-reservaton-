<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('invoiceno');
            $table->string('Fname');
            $table->string('Lname');
            $table->string('email');
            $table->string('NIC');
            $table->string('pyementmethod');
            $table->string('numberofseats');
            $table->string('payementstatus');
            $table->string('Reserveid');
            $table->string('boatid');
            
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
        Schema::dropIfExists('books');
    }
}
