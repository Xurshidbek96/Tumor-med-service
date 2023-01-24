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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->date('date')->nullable();
            $table->string('gender')->nullable();
            $table->string('region')->nullable();
            $table->string('city')->nullable();
            $table->string('type_sickness')->nullable();
            $table->string('sickness')->nullable();
            $table->string('psr')->nullable();
            $table->bigInteger('alt')->nullable();
            $table->bigInteger('ast')->nullable();
            $table->bigInteger('billirubin')->nullable();
            $table->bigInteger('ishqor')->nullable();
            $table->bigInteger('surma')->nullable();
            $table->bigInteger('igg')->nullable();
            $table->bigInteger('igm')->nullable();
            $table->bigInteger('result')->nullable();
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
        Schema::dropIfExists('members');
    }
};
