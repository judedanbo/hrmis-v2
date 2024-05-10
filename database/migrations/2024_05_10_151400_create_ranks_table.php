<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('ranks', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('type', 4);
            $table->foreignId('job_id')->constrained('ranks');
            $table->foreignId('company_id');
            $table->foreignId('rank_category_id');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::enableForeignKeyConstraints();
    }

    public function down(): void
    {
        Schema::dropIfExists('ranks');
    }
};
