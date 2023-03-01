<?php

use App\Models\PriceWinter;
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
        Schema::create('price_winters', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('first_day');
            $table->string('second_day');
            $table->string('thirs_day');
            $table->string('fourth_day');
            $table->string('fifth_day');
            $table->string('sixth_siventh_day');
            $table->string('inventy_day');
            $table->timestamps();
        });


        PriceWinter::create([
            'title' => 'firstproduct',
            'first_day' => '10',
            'second_day' => '20',
            'thirs_day' => '30',
            'fourth_day' => '40',
            'fifth_day' => '50',
            'sixth_siventh_day' => '60',
            'inventy_day' => '70',

          ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('price_winters');
    }
};
