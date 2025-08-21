<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Perfume extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'profile_pic',
        'description',
        'category_id',
        'supplier_id',
        'stock_quantity',
        'buying_date',
        'expire_date',
        'buying_price',
        'retail_price'
    ];

    protected $casts = [
        'buying_date' => 'date',
        'expire_date' => 'date',
        'buying_price' => 'decimal:2',
        'retail_price' => 'decimal:2',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
