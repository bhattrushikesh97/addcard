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
        Schema::table('carts', function (Blueprint $table) {
           
            $table->string('item')->nullable();
            $table->integer('price')->nullable();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->string('total')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('carts', function (Blueprint $table) {
            $table->dropColumn('item');
            $table->dropColumn('price');
            $table->dropColumn('description');
            $table->dropColumn('image');
            $table->dropColumn('total');
        });
    }
};
