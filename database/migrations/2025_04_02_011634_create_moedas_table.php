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
        Schema::create('moedas', function (Blueprint $table) {
            $table->id();
            $table->string('code', 10);
            $table->string('codein', 10)->nullable();
            $table->string('name', 35)->nullable();
            $table->decimal('high', 10, 5)->nullable();
            $table->decimal('low', 10, 5)->nullable();
            $table->decimal('varBird', 10, 6)->nullable();
            $table->decimal('pctChange', 10, 6)->nullable();
            $table->decimal('bid', 10, 5)->nullable();
            $table->decimal('ask', 10, 5)->nullable();
            $table->string('timestamp_api', 20)->nullable();
            $table->dateTime('create_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('moedas');
    }
};
