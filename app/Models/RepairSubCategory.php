<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\RepairCategory;

class RepairSubCategory extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $table = 'repair_sub_categories';

    protected $fillable = [
        'name',
        'title',
        'slug',
        'image',
        'small_image',
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

    /**
    *
    * @param $value
    */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function getNameCategoryAttribute()
    {
        $category = RepairCategory::where('id', $this->parent_id)->first();
        return $category->name;
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    { 
        return $this->belongsTo(RepairCategory::class, 'parent_id', 'id');  
    }
}
