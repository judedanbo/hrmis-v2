<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('company_status', function (Blueprint $table) {
            $table->foreignId('company_id');
            $table->foreignId('status_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('company_status');
    }
};