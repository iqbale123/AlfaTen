<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return vointeger
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->string('status');
            $table->foreignId('product_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->integer('quantity');
            $table->string('status');
            $table->string('invoice_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return vo
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};
