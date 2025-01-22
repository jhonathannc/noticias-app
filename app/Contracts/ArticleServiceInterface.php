<?php

namespace App\Contracts;

use App\Models\Article;
use Illuminate\Pagination\LengthAwarePaginator;

interface ArticleServiceInterface
{
    public function get(int $id): Article;

    public function paginate(): LengthAwarePaginator;

    public function store(array $data): Article;
}
