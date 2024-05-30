<?php

namespace App\Http\Controllers\User\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Comment\CommentStoreRequest;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(CommentStoreRequest $request)
    {
        $data = $request->all();
        auth()->user()->comments()->create($data);
        return to_route('user.index');
    }
}
