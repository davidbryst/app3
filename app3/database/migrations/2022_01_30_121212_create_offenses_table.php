<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offenses', function (Blueprint $table) {
            $table->id();
            $table->string('license_plate');
            $table->string('offense_type');
            $table->string('point_cost');
            $table->boolean('justify')->default(false);
            $table->boolean('registered')->default(false);
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
        Schema::dropIfExists('offenses');
    }
}
