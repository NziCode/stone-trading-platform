<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ProductAttributeOption extends Model
{
    use HasTranslations;

    protected $fillable = [
        'product_attribute_id',
        'value',
        'slug',
        'sort_order',
        'is_active',
    ];

    public array $translatable = [
        'value',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function attribute()
    {
        return $this->belongsTo(ProductAttribute::class, 'product_attribute_id');
    }
}
