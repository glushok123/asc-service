<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepairBrand extends Model
{
    use HasFactory;

    protected $table = 'repair_brands';

    protected $fillable = [
        'name',
        'title',
        'slug',
        'image',
        'min_price',
        'min_time',
        'description',
        'template_description_brand',
        'seo_title',
        'seo_description',
        'seo_keywords',
        'parent_id',
        'active',
    ];
}
