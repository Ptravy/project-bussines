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
        Schema::table('blogs', function (Blueprint $table){
            $table->string('name', 100)->nullable()->after('tittle');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::table('blogs', function (Blueprint $table){
          if (Schema::hasColumn('blogs', 'name')){
            $table->dropColumn('name');
            }
        });
    }
};
