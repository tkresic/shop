<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subcategory extends Model
{
    use SoftDeletes;

    /**
     * The attributes that aren't mass assignable. (All attributes are mass assignable.)
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes which are excluded from every query.
     *
     * @var array
     */
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];


    /**
     * Subcategory belongs to Category.
     *
     * @return BelongsTo
     */
    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }

    /**
     * Subcategory has many Products.
     *
     * @return HasMany
     */
    public function products(): HasMany {
        return $this->hasMany(Product::class);
    }
}
