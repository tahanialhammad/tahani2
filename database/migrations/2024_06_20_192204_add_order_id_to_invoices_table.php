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
        Schema::table('invoices', function (Blueprint $table) {
            $table->unsignedBigInteger('order_id')->nullable()->after('user_id');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->integer('payment_parts')->default(1)->after('order_id');
            $table->dropColumn('service_ids');
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->integer('payment_parts')->default(1)->after('price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('invoices', function (Blueprint $table) {
            $table->json('service_ids')->nullable();
        });
    }
};
