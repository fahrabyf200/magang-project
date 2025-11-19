<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('dob');
            $table->text('address');
            $table->string('no_telp');
            $table->string('univ');
            $table->string('major');
            $table->decimal('ipk', 3, 2);
            $table->string('cv');
            $table->foreignId('lowongan_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
