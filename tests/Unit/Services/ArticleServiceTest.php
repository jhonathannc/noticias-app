<?php

namespace Tests\Unit\Services;

use App\Models\Article;
use App\Models\Category;
use App\Services\ArticleService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Mockery;
use PHPUnit\Framework\TestCase;

class ArticleServiceTest extends TestCase
{
    use RefreshDatabase;

    public function test_store_article(): void
    {
        $category = Category::factory()->create();

        $service = new ArticleService();
        $data = [
            'title' => 'Test Article',
            'content' => 'Test content',
            'category_id' => $category->id,
        ];
        $article = $service->store($data);

        $this->assertInstanceOf(Article::class, $article);
        $this->assertEquals('Test content', $article->content);
        $this->assertEquals('Test Article', $article->title);
        $this->assertNotNull($article->id);
    }
}
