<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
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
     * Product belongs to Subcategory.
     *
     * @return BelongsTo
     */
    public function subcategory(): BelongsTo {
        return $this->belongsTo(Subcategory::class);
    }
}
