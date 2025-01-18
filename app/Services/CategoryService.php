<?php

namespace App\Services;

use App\Models\Category;
use Illuminate\Pagination\LengthAwarePaginator;

final class CategoryService
{
    public function paginate(): LengthAwarePaginator
    {
        return Category::paginate();
    }
}
