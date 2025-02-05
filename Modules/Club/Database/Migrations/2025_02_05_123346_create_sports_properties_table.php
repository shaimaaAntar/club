<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sports_properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('sportType_id')->constrained();
            $table->string('name');
            $table->string('input_type');
            $table->enum('type',['individuals','teams']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sports_properties');
    }
};
