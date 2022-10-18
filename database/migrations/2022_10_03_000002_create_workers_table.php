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
        Schema::create('workers', function (Blueprint $table) {
            $table->string('rut')->primary();
            $table->string('last_name', 50);
            $table->string('company_rut');
            $table->timestamps();
            //foreign key user
            $table->foreign('rut')->references('rut')->on('users');
            $table->foreign('company_rut')->references('rut')->on('companies');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workers');
    }
};
