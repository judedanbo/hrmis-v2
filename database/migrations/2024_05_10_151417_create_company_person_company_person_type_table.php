<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('company_person_company_person_type', function (Blueprint $table) {
            $table->foreignId('company_person_id');
            $table->foreignId('company_person_type_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('company_person_company_person_type');
    }
};
