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
        Schema::create('import_warehouses', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->date('import_date');

            $table->bigInteger('id_admin');
            $table->foreign('id_admin')->references('id')->on('users');

            $table->string('id_warehouse');
            $table->foreign('id_warehouse')->references('id')->on('warehouse');

            $table->string('id_vendor');
            $table->foreign('id_vendor')->references('id')->on('vendors');

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
        Schema::dropIfExists('import_warehouse');
    }
};
