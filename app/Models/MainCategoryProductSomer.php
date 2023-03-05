<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubCategoryProductSomer;

class MainCategoryProductSomer extends Model
{
    use HasFactory;
    protected $guarded = array();

    function subcategories()
    {
        return $this->hasMany(SubCategoryProductSomer::class,'main_category_id');
    }

}
