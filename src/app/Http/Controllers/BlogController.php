<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use function Laravel\Prompts\search;

class BlogController extends Controller
{

    public function index(Request $request)
    {
        $search = $request->input('search');
        $category_id = $request->input('category_id');
        $validated = $request->validate([
            'limit' => ['nullable','integer','min:1','max:100'],
            'page' => ['nullable','integer','min:1','max:100'],
        ]);
        $limit = $validated['limit'] ?? 12;
        $page = $validated['page'] ?? 1;
        $offset = $limit * ($page - 1);
//        $posts = Post::query()->limit($limit)->offset($offset)->get();
        $posts = Post::query()->orderByDesc('published_at')->paginate($limit);
        $posts->filter(function ($post) use ($search, $category_id) {
            if ($search && !str_contains(Str::lower($post->body), Str::lower($search))) {
                return false;
            }
            if ($category_id && $post->category_id != $category_id) {
                return false;
            }
            return true;
        });
        return view('blog.index', compact('posts'));
    }

    public function show(string $id)
    {
        $post = (object)[
            'id' => 1,
            'title' => 'Название поста',
            'body' => 'Тело поста с текстом ',
        ];
        return view('blog.show', compact('post'));
    }

    public function like(string $id)
    {
        return view('blog.like');
    }
}
