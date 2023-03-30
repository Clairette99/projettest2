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
        Schema::create('tarifications', function (Blueprint $table) {
            $table->id();
            $table->double("prix");
            $table->foreignId("article_id")->constrained();
            $table->foreignId("duree_location_id")->constrained();
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tarifications', function (Blueprint $table) {
            $table->dropForeign("article_id");
            $table->dropForeign("duree_location_id");
            
        });
        Schema::dropIfExists('tarifications');
    }
};
