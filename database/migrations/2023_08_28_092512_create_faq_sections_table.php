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
        if (!Schema::hasTable('faq_sections')) {
            Schema::create('faq_sections', function (Blueprint $table) {
                $table->id();
                $table->string('name')->unique();
                $table->integer('sort_order');
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('faqs')) {
            Schema::create('faqs', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('section_id'); 
                $table->foreign('section_id')->references('id')->on('faq_sections')->onDelete('cascade');
                $table->string('question');
                $table->text('answer');
                $table->integer('sort_order');       
                $table->timestamps();
            });
        }
        
      //  dd('test');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faq_sections');
    }
};
