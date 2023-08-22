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
        // Schema::table('users', function (Blueprint $table) {
        //     $table->boolean('is_admin')->default(false);
        // });


        Schema::create('roles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name'); //manger , resller , customer
            $table->timestamps();
        });

   

        Schema::table('users', function (Blueprint $table) {
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
        });

        dd('tes');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
