<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;

class BlogController extends Controller
{

    public function blogList()
    {
        return view('blog');
    }

    public function blogDetail($id) {}

    public function adminBlogList()
    {
        $articles = Article::latest()->paginate(10);

        return view('admin/dashboard', compact('articles'));
    }

    public function adminBlogCreate()
    {
        return view('admin/add-new');
    }

    public function adminBlogSave(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:articles,slug',
            'author' => 'required|string|max:100',
            'content' => 'required|string',
            'summary' => 'required|string|max:500',
            'tags' => 'nullable|string|max:255',
        ]);

        Article::create($validated);

        return redirect()->route('admin.blog.list')->with('success', 'Artículo creado correctamente.');
    }

    public function adminBlogEdit(string $slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        return view('admin.edit-post', compact('article'));
    }

    public function adminBlogUpdate(Request $request, $slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        $validated = $request->validate([
            'title'   => 'required|string|max:255',
            'slug'    => 'required|string|max:255|unique:articles,slug,' . $article->id,
            'author'  => 'required|string|max:100',
            'content' => 'required|string',
            'summary' => 'required|string|max:500',
            'tags'    => 'nullable|string|max:255',
        ]);

        $article->update($validated);

        return redirect()->route('admin.blog.list')->with('success', 'Artículo actualizado correctamente.');
    }

    public function adminBlogDelete($id) {}
}
