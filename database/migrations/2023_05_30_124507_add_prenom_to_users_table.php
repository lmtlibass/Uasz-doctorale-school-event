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
        Schema::table('users', function (Blueprint $table) {
            $table->string('prenom')->after('name')->nullable();
            $table->string('nom')->after('prenom')->nullable();
            $table->string('telephone')->after('nom')->nullable();
            $table->string('adresse')->after('telephone')->nullable();
            $table->string('profession')->after('adresse')->nullable();
            $table->string('photo')->after('profession')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
