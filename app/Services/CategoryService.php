<?php

namespace App\Services;

use App\Http\Requests\Article\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Pagination\LengthAwarePaginator;

final class CategoryService
{
    public function paginate(): LengthAwarePaginator
    {
        return Category::paginate();
    }

    public function store(array $data): Category
    {
        return Category::create($data);
    }
}
