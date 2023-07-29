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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('title')->unique();
            $table->text('post');
            $table->string('cover');
            $table->string('slug')->unique()->nullable();
            $table->integer('likes');
            $table->foreignId('tag_id')->constrained('tags')->nullable()->onDelete('cascade');
            $table->enum('status', ['popular', 'latest', 'trending','normal'])->default('normal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
