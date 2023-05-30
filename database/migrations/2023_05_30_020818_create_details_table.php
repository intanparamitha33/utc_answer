<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('book_id')->references('id')->on('books')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('author');
            $table->date('date');
            $table->string('readingTime');
            $table->longText('body');
            $table->time('time');
            $table->integer('count_view');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details');
    }
};
