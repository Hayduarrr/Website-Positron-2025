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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('nim', 20)->unique();
            $table->string('name', 255);
            $table->string('group_name', 100);
            $table->string('mentor_name', 255);
            // Tidak menggunakan timestamps karena di model sudah disabled
            // $table->timestamps(); // Dikomentari karena model menggunakan $timestamps = false
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};