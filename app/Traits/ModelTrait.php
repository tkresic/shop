<?php

namespace App\Traits;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

trait ModelTrait
{
    /**
     * Searches table values based on selected attributes and inserted value.
     *
     * @param string $search
     * @param array $attributes
     * @param Builder $query
     * @return Builder
     */
    public function search(string $search, array $attributes, Builder $query): Builder
    {
        $query->where($attributes[0], 'ILIKE', "%$search%");

        for ($i = 1; $i < sizeof($attributes); $i++) {
            $query->orWhere($attributes[$i], 'ILIKE', "%$search%");
        }

        return $query;
    }
}
