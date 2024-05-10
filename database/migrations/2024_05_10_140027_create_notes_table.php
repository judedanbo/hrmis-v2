<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('note');
            $table->foreignId('person_id');
            $table->foreignId('company_person_id');
            $table->foreignId('company_id');
            $table->foreignId('unit_id');
            $table->foreignId('position_id');
            $table->foreignId('job_id');
            $table->foreignId('job_category_id');
            $table->foreignId('dependant_id');
            $table->foreignId('qualification_id');
            $table->foreignId('document_id');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::enableForeignKeyConstraints();
    }

    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};
