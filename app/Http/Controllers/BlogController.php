<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;

class BlogController extends Controller
{

    /**
     * Muestra la lista de artículos del blog.
     *
     * @return \Illuminate\View\View
     */
    public function blogList()
    {
        // todo => pagination & filter
        $articles = Article::latest()->paginate(10);

        return view('blog', compact('articles'));
    }

    /**
     * Muestra los detalles de un artículo.
     *
     * @param  string  $slug
     * @return \Illuminate\View\View
     */
    public function blogDetail($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        return view('blog-detail', compact('article'));
    }

    /**
     * Muestra la lista de artículos en el panel de admin.
     *
     * @return \Illuminate\View\View
     */
    public function adminBlogList()
    {
        // todo => pagination & filter
        $articles = Article::latest()->paginate(10);

        return view('admin/dashboard', compact('articles'));
    }

    /**
     * Muestra el formulario para crear un artículo.
     *
     * @return \Illuminate\View\View
     */
    public function adminBlogCreate()
    {
        return view('admin/add-new');
    }

    /**
     * Guarda un nuevo artículo.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
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

    /**
     * Muestra el formulario para editar un artículo.
     *
     * @param  string  $slug
     * @return \Illuminate\View\View
     */
    public function adminBlogEdit(string $slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        return view('admin.edit-post', compact('article'));
    }

    /**
     * Actualiza un artículo.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\RedirectResponse
     */
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

    /**
     * Elimina un artículo.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\RedirectResponse
     */
    public function adminBlogDelete($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        $article->delete();

        return redirect()->route('admin.blog.list')->with('success', 'Artículo eliminado correctamente.');
    }
}
