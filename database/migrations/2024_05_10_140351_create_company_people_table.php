<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('company_people', function (Blueprint $table) {
            $table->id();
            $table->string('file_number', 12);
            $table->string('staff_number', 12);
            $table->string('old_staff_number', 12);
            $table->date('hire_date');
            $table->date('exit_date');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('company_people');
    }
};
