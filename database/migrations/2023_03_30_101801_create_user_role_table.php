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
        Schema::create('user_role', function (Blueprint $table) {
            $table->foreignId("user_id")->constrained();
            $table->foreignId("role_id")->constrained();
            
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_role', function (Blueprint $table) {
            $table->dropForeign(["user_id","role_id"]);
        });
        Schema::dropIfExists('user_role');
    }
};
