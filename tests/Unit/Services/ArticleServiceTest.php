<?php

namespace Tests\Unit\Services;

use App\Contracts\ArticleServiceInterface;
use App\Http\Controllers\ArticleController;
use App\Http\Requests\Article\StoreArticleRequest;
use App\Models\Article;
use App\Models\Category;
use App\Services\ArticleService;
use App\Services\CategoryService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Mockery;
use Tests\TestCase;

class ArticleServiceTest extends TestCase
{
    use RefreshDatabase;

    public function test_should_create_article(): void
    {
        $data = [
            'title' => 'Test Article',
            'content' => 'This is a test content.',
            'category_id' => Category::factory()->create()->id,
        ];

        $articleService = app(ArticleService::class);
        $article = $articleService->store($data);

        // Assertions
        $this->assertDatabaseHas('articles', ['title' => 'Test Article']);
        $this->assertInstanceOf(Article::class, $article);
        $this->assertEquals('Test Article', $article->title);
        $this->assertEquals($data['category_id'], $article->categories()->first()->id);
    }
}
