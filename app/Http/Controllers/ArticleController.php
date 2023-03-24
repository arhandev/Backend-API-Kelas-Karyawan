<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use stdClass;

class ArticleController extends Controller
{
    public function index()
    {
        try {
            $articles = Article::latest()->get();
            return response()->json([
                "info" => "Berhasil Mengambil Artikel",
                "data" => $articles
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "info" => "Terjadi Sesuatu Error",
                "data" => new stdClass()
            ], 500);
        }
    }

    public function show(Request $request, Article $article)
    {
        try {
            return response()->json([
                "info" => "Berhasil Mengambil Detail Artikel",
                "data" => $article
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "info" => "Terjadi Sesuatu Error",
                "data" => new stdClass()
            ], 500);
        }
    }

    public function store(StoreArticleRequest $request)
    {
        try {
            $article = new Article();
            $article->name = $request->name;
            $article->content = $request->content;
            $article->image_url = $request->image_url;
            $article->highlight = $request->highlight;
            $article->save();

            return response()->json([
                "info" => "Berhasil Membuat Artikel",
                "data" => $article
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "info" => "Terjadi Sesuatu Error",
                "data" => new stdClass()
            ], 500);
        }
    }

    public function update(StoreArticleRequest $request, Article $article)
    {
        try {
            $article->name = $request->name;
            $article->content = $request->content;
            $article->image_url = $request->image_url;
            $article->highlight = $request->highlight;
            $article->save();

            return response()->json([
                "info" => "Berhasil Mengubah Artikel",
                "data" => $article
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "info" => "Terjadi Sesuatu Error",
                "data" => new stdClass()
            ], 500);
        }
    }

    public function delete(Request $request, Article $article)
    {
        try {
            $article->delete();

            return response()->json([
                "info" => "Berhasil Menghapus Artikel",
                "data" => $article
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "info" => "Terjadi Sesuatu Error",
                "data" => new stdClass()
            ], 500);
        }
    }
}
