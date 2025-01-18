<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $searchTerm = $request->input('search', '');
        $articles = Article::where('title', 'like', "%$searchTerm%")
            ->OrWhereHas('categories', fn($category) => $category->where('name', 'like', "%$searchTerm%"))
            ->paginate();
        return view('pages.articles.index', compact('articles'));
    }
}
