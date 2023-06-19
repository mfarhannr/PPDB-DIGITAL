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
        Schema::create('formulir', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('nisn');
            $table->boolean('gender');
            $table->string('place');
            $table->date('birthday');
            $table->string('religion');
            $table->integer('phone');
            $table->string('disease');
            $table->string('address');
            $table->string('school_origin');
            $table->string('parents_name');
            $table->string('parents_occupation');
            $table->string('parents_contact');
            $table->string('achievement');
            $table->string('file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formulir');
    }
};
