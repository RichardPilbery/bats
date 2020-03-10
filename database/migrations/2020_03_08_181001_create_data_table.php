<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('app_id');
            $table->unsignedInteger('bp');
            $table->unsignedInteger('gcs');
            $table->unsignedInteger('rr');
            $table->unsignedInteger('spo2');
            $table->unsignedInteger('hr');
            $table->unsignedInteger('age');
            $table->unsignedInteger('bats');
            $table->unsignedInteger('votes');
            $table->datetime('calc_datetime');
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
        Schema::dropIfExists('data');
    }
}
