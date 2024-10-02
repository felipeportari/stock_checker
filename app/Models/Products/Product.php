<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'category_id', 'image', 'expiration_date', 'barcode', 'market', 'price', 'quantity'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
