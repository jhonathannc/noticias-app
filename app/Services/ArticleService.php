<?php

namespace App\Services;

use App\Models\Article;
use Illuminate\Pagination\LengthAwarePaginator;

final class ArticleService
{
    public function get(int $id): Article
    {
        return Article::find($id);
    }

    public function paginate(): LengthAwarePaginator
    {
        return Article::with('categories')->paginate();
    }

    public function store(array $data): Article
    {
        $article = Article::create($data);
        $article->categories()->sync([$data['category_id']]);
        return $article;
    }
}
