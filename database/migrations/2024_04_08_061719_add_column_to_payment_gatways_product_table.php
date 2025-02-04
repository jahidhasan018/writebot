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
        Schema::table('payment_gateway_products', function (Blueprint $table) {
            if(!Schema::hasColumn($table->getTable(), 'price_id')) {
                $table->string('price_id')->nullable();
            }
        });
        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payment_gateway_products', function (Blueprint $table) {
            $table->dropColumn([
               'price_id'
            ]);
        });

    }
};
