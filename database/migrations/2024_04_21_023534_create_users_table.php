<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('firstname', 50)->nullable(false);
            $table->string('lastname', 50)->nullable(false);
            $table->text('description',500)->nullable();
            
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
