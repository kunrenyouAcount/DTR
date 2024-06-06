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
        Schema::create('tag_tracking', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('tag_id')->unsigned()->comment('タグID');
            $table->bigInteger('tracking_id')->unsigned()->comment('トラッキングID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tag_tracking');
    }
};
