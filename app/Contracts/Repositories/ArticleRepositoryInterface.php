<?php

namespace App\Contracts\Repositories;

use App\Models\Article;

interface ArticleRepositoryInterface
{
    public function store(array $data): Article;
}
