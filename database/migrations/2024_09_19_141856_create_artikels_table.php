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
        Schema::create('artikels', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('category');
            $table->text('content');
            $table->string('image');
            $table->string('status')->default('Draft'); // Tambahkan kolom status
            $table->timestamps();
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('artikels', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
