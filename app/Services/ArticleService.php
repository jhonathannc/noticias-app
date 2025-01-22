<?php

namespace App\Services;

use App\Contracts\ArticleServiceInterface;
use App\Contracts\Repositories\ArticleRepositoryInterface;
use App\Models\Article;
use App\Repositories\ArticleRepository;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Cache;

class ArticleService implements ArticleServiceInterface
{
    private ArticleRepositoryInterface $repository;

    public function __construct()
    {
        $this->repository = app(ArticleRepository::class);
    }

    public function get(int $id): Article
    {
        return Article::find($id);
    }

    public function paginate(): LengthAwarePaginator
    {
        $cachedPaginate = Cache::remember('categories.index', 3600, function () {
            return Article::with('categories')->paginate();
        });

        return $cachedPaginate;
    }

    /**
     * esse fmetodo daz isso e assado
     */
    public function store(array $data): Article
    {
        // $article = Article::create($data);
        // $article->categories()->sync([$data['category_id']]);
        // return $article;
        return $this->repository->store($data);
    }
}
