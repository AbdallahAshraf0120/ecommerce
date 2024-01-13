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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('category_id');
            $table->string ('name');
            $table->string('stringslug');
            $table->string('stringdescription');
            $table->string('stringimage');
            $table->string('stringis_showing');
            $table->string('stringis_populer');
            $table->string('stringmeta_title');
            $table->string('stringmeta_description');
            $table->string('stringmeta_keywords');
            $table->string('stringcreated_at');
            $table->string('stringupdated_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
