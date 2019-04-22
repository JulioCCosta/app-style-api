<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditCarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_car', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',50);
            $table->decimal('limit',9,3);
            $table->timestamp('date_close');
            $table->timestamp('date_maturity');
            $table->bigInteger('conta_id');
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
        Schema::dropIfExists('credit_car');
    }
}
