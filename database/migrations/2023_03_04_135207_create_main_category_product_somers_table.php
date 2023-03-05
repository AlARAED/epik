<?php

use App\Models\MainCategoryProductSomer;
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
        Schema::create('main_category_product_somers', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('title');


            $table->timestamps();
        });
        MainCategoryProductSomer::create([
            'img' => 'sommer-cover-index.jpg',
            'title'=>'Preisliste Sommer 2022'
          ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main_category_product_somers');
    }
};
