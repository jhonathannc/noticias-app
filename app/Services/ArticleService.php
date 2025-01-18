<?php

namespace App\Services;

use App\Http\Requests\Article\StoreArticleRequest;
use App\Models\Article;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

final class ArticleService
{
    public function get(int $id): Article
    {
        return Article::find($id);
    }

    public function paginate(): LengthAwarePaginator
    {
        return Article::paginate();
    }

    public function store(StoreArticleRequest $request): Article
    {
        $data = $request->validated();
        return Article::create($data);
    }
}
