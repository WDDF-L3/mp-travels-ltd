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
    Schema::create('articles', function (Blueprint $table) {
        $table->id();
        $table->string('category')->default('Uncategorized');
        $table->string('author')->default('mptravels');
        $table->string('title');
        $table->string('image');
        $table->text('description');
        $table->string('facebook')->nullable();
        $table->string('instagram')->nullable();
        $table->string('pinterest')->nullable();
        $table->string('twitter')->nullable();
        $table->string('website')->nullable();
        $table->boolean('status')->default(1);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
