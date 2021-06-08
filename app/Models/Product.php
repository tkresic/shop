<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['subcategory_id', 'name', 'price', 'cost', 'sku', 'image'];

    /**
     * The attributes which are excluded from every query.
     *
     * @var array
     */
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    /**
     * Product belongs to Subcategory.
     *
     * @return BelongsTo
     */
    public function subcategory(): BelongsTo {
        return $this->belongsTo(Subcategory::class);
    }
}
