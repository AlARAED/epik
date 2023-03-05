<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MainCategoryProductSomer;

class SubCategoryProductSomer extends Model
{
    use HasFactory;
    protected $guarded = array();

    function maincatego()
    {
        return $this->belongsTo(MainCategoryProductSomer::class,'main_category_id');
    }

}
