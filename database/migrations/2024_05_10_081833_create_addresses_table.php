<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('address_line_1', 100);
            $table->string('address_line_2', 100);
            $table->string('city', 100);
            $table->string('state', 100);
            $table->string('country', 4);
            $table->string('zip_code', 100);
            $table->foreignId('person_id');
            $table->foreignId('company_id');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
