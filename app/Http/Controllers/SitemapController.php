<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class SitemapController extends Controller
{
    protected $Blog;
    public function __construct(Blog $Blog)
    {
        $this->Blog = $Blog;
    }
    public function index()
    {
      $categories = $this->Blog->getList('mr_categories');
      return response()->view('frontend/pages/sitemap/index', [
          'categories' => $categories,
      ])->header('Content-Type', 'text/xml');
    }
	
	public function blog()
    {
        $categories = $this->Blog->getList('mr_blog');
        return response()->view('frontend/pages/sitemap/blog', [
            'categories' => $categories,
        ])->header('Content-Type', 'text/xml');
    }
}
