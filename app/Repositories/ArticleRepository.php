<?php

namespace App\Repositories;

use App\Contracts\Repositories\ArticleRepositoryInterface;
use App\Models\Article;

class ArticleRepository implements ArticleRepositoryInterface
{
    public function store(array $data): Article
    {
        $article = Article::create($data);
        $article->categories()->sync([$data['category_id']]);
        return $article;
    }
}
