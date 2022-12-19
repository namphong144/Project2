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
        Schema::create('detail_import_warehouse', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->string('id_product');
            $table->foreign('id_product')->references('id')->on('products');

            $table->string('id_import');
            $table->foreign('id_import')->references('id')->on('import_warehouse');
            $table->decimal('import_price');
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
        Schema::dropIfExists('detail_import_warehouse');
    }
};
