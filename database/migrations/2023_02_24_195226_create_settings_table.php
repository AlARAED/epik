<?php

use App\Models\Setting;
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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();


            $table->string('logo_winter');
            $table->string('logo_sommer');

            $table->string('phone');
            $table->string('title');
            $table->string('address');
            $table->string('booking_link')->nullable();

            $table->string('fb')->nullable();
            $table->string('inst')->nullable();
            $table->string('wats')->nullable();
            $table->string('box1');
            $table->string('box2');
            $table->string('box3');
            $table->text('texthomesite');


            $table->timestamps();
        });

        Setting::create([
            'title' => 'Skiparadies Top Skiverleih Ellmau',
            'phone' => 'xxxx_xxx-xx',

            'address' => 'kk_rrr_rr',
            'fb' => 'https://www.facebook.com/',
            'inst' => 'https://www.instagram.com/',
            'wats' => 'https://web.whatsapp.com/',
            'logo_winter' => 'logo.png',

            'logo_sommer' => 'logo.png',
            'booking_link'=>'https://easyresv3.wintersteiger.at/index_easyrent.php?step=0&disgr_intnr=&shop_id=100086',
            'box1' => 'BEIM AUSLEIHEN VON 2 ERWACHSENEN E- BIKE + 1 KINDER BIKE IST DAS KINDERBIKE UM -20% VERGÜNSTIGT',
            'box2' => 'BEIM AUSLEIHEN VON 2 ERWACHSENEN + 2 KINDER E- BIKES IST 1 KINDER E-BIKE -40% VERGÜNSTIGT',
            'box3' => 'BEIM AUSLEIHEN VON 2 ERWACHSENEN + 2 KINDER E- BIKES IST 1 KINDER E-BIKE -40% VERGÜNSTIGT',
            'texthomesite'=>'BEIM AUSLEIHEN VON 2 ERWACHSENEN + 2 KINDER E- BIKES IST 1 KINDER E-BIKE -40% VERGÜNSTIGT'

          ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
