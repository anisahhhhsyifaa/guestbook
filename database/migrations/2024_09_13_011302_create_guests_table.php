<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('guests', function (Blueprint $table) {
            $table->id();
            $table->string('fullname, 128');
            $table->foreignId('institution_id')->references('id')->on('institutions');
            $table->string('from')->nullable();
            $table->string('phonenumber', 16)->nullable();
            $table->string('email', 64)->nullable();
            $table->longText('note')->nulllable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guests');
    }
};
