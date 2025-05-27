<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('pendeta', function (Blueprint $table) {
             DB::statement('ALTER TABLE pendeta MODIFY COLUMN id INT UNSIGNED AUTO_INCREMENT');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pendeta', function (Blueprint $table) {
            DB::statement('ALTER TABLE pendeta MODIFY COLUMN id BIGINT UNSIGNED AUTO_INCREMENT');
        });
    }
};
