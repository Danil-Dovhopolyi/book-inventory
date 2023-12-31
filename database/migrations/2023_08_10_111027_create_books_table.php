<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('author', 255)->nullable();
            $table->smallInteger('publication_year')->nullable();
            $table->string('publisher', 100);
            $table->string('isbn', 30)->unique();
            $table->timestamps();
         
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
