<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Str;
use Illuminate\View\View;


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

    public function show(Request $request,string $id): View
    {
        $post = Cache::remember("posts.{$id}", now()->addDay(), function () use ($id) {
            return Post::query()->findOrFail($id);
        });

        return view('blog.show', compact('post'));
    }

    public function like(string $id)
    {
        return view('blog.like');
    }
}
