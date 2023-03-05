<?php

use App\Models\Gallery;
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
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('type');
            $table->timestamps();
        });




        Gallery::create([
            'img' => 'g-4.jpg',
            'type'=>'1'
          ]);


          Gallery::create([
            'img' => 'g-4.jpg',
            'type'=>'2'
          ]);

          Gallery::create([
            'img' => 'g-2.png',
            'type'=>'1'
          ]);


          Gallery::create([
            'img' => 'g-2.png',
            'type'=>'2'
          ]);



          Gallery::create([
            'img' => 'g-3.jpg',
            'type'=>'1'
          ]);




          Gallery::create([
            'img' => 'g-3.jpg',
            'type'=>'2'
          ]);





          Gallery::create([
            'img' => 'g-1.jpg',
            'type'=>'1'
          ]);

          Gallery::create([
            'img' => 'g-1.jpg',
            'type'=>'2'
          ]);


          Gallery::create([
            'img' => 'g-6.jpg',
            'type'=>'1'
          ]);


          Gallery::create([
            'img' => 'g-6.jpg',
            'type'=>'2'
          ]);


          Gallery::create([
            'img' => 'g-5.jpg',
            'type'=>'1'
          ]);


          Gallery::create([
            'img' => 'g-5.jpg',
            'type'=>'2'
          ]);



    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galleries');
    }
};
