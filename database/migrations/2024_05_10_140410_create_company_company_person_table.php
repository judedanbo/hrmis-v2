<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('company_company_person', function (Blueprint $table) {
            $table->foreignId('company_id');
            $table->foreignId('company_person_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('company_company_person');
    }
};
