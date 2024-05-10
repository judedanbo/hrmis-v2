<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('qualifications', function (Blueprint $table) {
            $table->id();
            $table->string('institution', 100);
            $table->string('course', 100);
            $table->string('qualification', 100);
            $table->string('qualification_number', 100);
            $table->string('level', 100);
            $table->string('year_completed', 4);
            $table->foreignId('person_id');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::enableForeignKeyConstraints();
    }

    public function down(): void
    {
        Schema::dropIfExists('qualifications');
    }
};
