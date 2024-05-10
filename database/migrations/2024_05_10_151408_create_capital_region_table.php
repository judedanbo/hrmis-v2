<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('capital_region', function (Blueprint $table) {
            $table->foreignId('capital_id');
            $table->foreignId('region_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('capital_region');
    }
};
