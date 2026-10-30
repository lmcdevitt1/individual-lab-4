<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('items', function (Blueprint $table) {
            $table->string('manufacturer')->nullable();
            $table->string('make')->nullable();
            $table->string('model')->nullable();
            $table->string('price_range')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('items', function (Blueprint $table) {
            $table->dropColumn([
                'manufacturer',
                'make',
                'model',
                'price_range',
            ]);
        });
    }
};