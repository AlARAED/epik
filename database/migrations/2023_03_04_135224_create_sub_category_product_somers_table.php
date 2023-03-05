<?php

use App\Models\SubCategoryProductSomer;
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
        Schema::create('sub_category_product_somers', function (Blueprint $table) {
            $table->id();
            $table->string('category_name');
            $table->text('text');
            $table->unsignedBigInteger('main_category_id');
            $table->foreign('main_category_id')->references('id')->on('main_category_product_somers')
                   ->onDelete('cascade');

            $table->timestamps();
        });
        SubCategoryProductSomer::create([
            'category_name' => 'E-Enduro',
            'text'=>'nur tageweise verleihbar 1 Tag € 59,- / 2 Tage pro Tag € 50,- / ab 3 Tage pro Tag € 45,-',
            'main_category_id'=>'1'

          ]);



    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_category_product_somers');
    }
};
