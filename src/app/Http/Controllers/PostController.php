<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\StorePostRequest;
use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\View\View;
use PhpParser\ParserAbstract;

class PostController extends Controller
{
    public function index(): View
    {
        $posts = Post::query()->paginate(12);
        return view('user.posts.index', compact('posts'));
    }


    public function create()
    {
        return view('user.posts.create');
    }


    public function store(StorePostRequest $request) : RedirectResponse
    {
        $validated = $request->validated();
//        $post = Post::query()->create([
//            'user_id' =>User::query()->value('id'),
//            'title' => $validated['title'],
//            'content' => $validated['content'],
//            'published_at' => new Carbon($validated['published_at'] ?? null),
//            'published' => $validated['published'] ?? false,
//        ]);
//        dd($post->toArray()) ;
        return to_route('user.posts.show', 1);
    }


    public function show($post)
    {
        $post = (object)[
            'id' => 1,
            'title' => 'Название поста',
            'body' => 'Тело поста с текстом ',
        ];

        return view('user.posts.show', compact('post'));
    }


    public function edit($post)
    {
        $post = (object)[
            'id' => 1,
            'title' => 'Название поста',
            'body' => 'Тело поста с текстом ',
        ];

        return view('user.posts.edit', compact('post'));
    }


    public function update(StorePostRequest $request, $post)
    {
        $name = $request->input('name');
        $content = $request->input('content');
        alert('Сохранено!');
        return back()->withInput();
    }


    public function destroy($post)
    {
        return view('user.posts.destroy', compact('post'));
    }


    public function like()
    {
        return view('user.posts.like');
    }
}
