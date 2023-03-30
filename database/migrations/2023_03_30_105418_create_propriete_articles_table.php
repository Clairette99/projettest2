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
        Schema::create('propriete_articles', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("estObligatoire")->default(1);
            $table->foreignId("type_article_id")->constrained();
            
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::table('propriete_articles',function (Blueprint $table){
                $table->dropforeign("type_article_id");
        });

        Schema::dropIfExists('propriete_articles');
    }
};
