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
        Schema::create('starprofiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unique();
            $table->string('name');
            $table->string('last_name');
            $table->string('nationality');
            $table->date('date_of_birth');
            $table->integer('height');
            $table->integer('weight');
            $table->string('eyes_color');
            $table->string('hair_color');
            $table->text('additional_info')->nullable();
            $table->text('artistic_skills')->nullable();
            $table->string('profile_media')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('starprofiles');
    }
};
