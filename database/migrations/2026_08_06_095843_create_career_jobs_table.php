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
        Schema::create('career_jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('career_category_id')->constrained('career_categories')->onDelete('cascade');
            $table->string('title');
            $table->string('location');
            $table->string('type'); // Full-Time, Part-Time, etc.
            $table->string('qualification');
            $table->string('experience');
            $table->string('salary')->nullable();
            $table->text('responsibilities');
            $table->text('skills');
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('career_jobs');
    }
};
