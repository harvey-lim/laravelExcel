<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->increments('business_id');
            $table->string('business_name')->default('');
            $table->string('address_line_1')->default('');
            $table->string('address_line_2')->default('');
            $table->string('address_line_3')->default('');
            $table->string('address_line_4')->default('');
            $table->string('address_line_5')->default('');
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
        Schema::dropIfExists('businesses');
    }
}
