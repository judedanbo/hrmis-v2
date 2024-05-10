<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('type', 4);
            $table->foreignId('next_job')->constrained('jobs', 'job');
            $table->foreignId('company_id');
            $table->foreignId('job_category_id');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
