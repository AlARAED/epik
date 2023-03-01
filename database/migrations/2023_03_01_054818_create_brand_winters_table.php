<?php

use App\Models\BrandWinter;
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
        Schema::create('brand_winters', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('type'); //1-winter 2-sommer

            $table->timestamps();
        });



        BrandWinter::create([
            'img' => 'k2-hd.png',
            'type'=>'1'


          ]);


          BrandWinter::create([
            'img' => 'flow-hd.png',
            'type'=>'1'


          ]);

          BrandWinter::create([
            'img' => 'head-hd (1).png',
            'type'=>'1'


          ]);

          BrandWinter::create([
            'img' => 'lowa-hd.png',
            'type'=>'1'


          ]);

          BrandWinter::create([
            'img' => 'k2-hd.png',
            'type'=>'1'


          ]);

          BrandWinter::create([
            'img' => 'atomic-hd.png',
            'type'=>'1'


          ]);


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brand_winters');
    }
};
