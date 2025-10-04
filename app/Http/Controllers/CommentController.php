<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index() {
        $comments = Comment::all();
        return view('comments.index');
    }

    public function create() {
        return "this has to return create form view";
    }

    public function store(Request $request) {
        Comment::create([
            'content' => $request["content"]
        ]);

        return redirect('/comments/list');
    }

    // delete functionality has to be implemented
}
