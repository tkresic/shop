<?php

namespace App\Repositories;

use App\Models\Subcategory;

class SubcategoryRepository extends ModelRepository
{
    public function __construct(Subcategory $subcategory)
    {
        parent::__construct($subcategory);
    }
}
