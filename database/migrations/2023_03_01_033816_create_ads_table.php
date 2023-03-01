<?php

use App\Models\Ads;
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
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->string('img1');
            $table->string('img2');
            $table->timestamps();
        });

        Ads::create([
            'img1' => '63fee577f4229.jpg',
            'img2' => '63fee577f4229.jpg',


          ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ads');
    }
};
