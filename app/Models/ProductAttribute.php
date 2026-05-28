<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ProductAttribute extends Model
{
    use HasTranslations;

    protected $fillable = [
        'name',
        'slug',
        'type',
        'is_filterable',
        'is_required',
        'is_active',
        'sort_order',
    ];

    public array $translatable = [
        'name',
    ];

    protected $casts = [
        'is_filterable' => 'boolean',
        'is_required' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function options()
    {
        return $this->hasMany(ProductAttributeOption::class);
    }

    public function values()
    {
        return $this->hasMany(ProductAttributeValue::class);
    }
}
