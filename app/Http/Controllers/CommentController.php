<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index() {
        // Plan (question to AI):
        // Laravel question. How to get all resource data from model in index controller 
        // method so that I can display it in index view

        // dabūjam datu no datubāzes
        $comments = Comment::all();

        // dd($comments); // var_dump + die = dd

        return view('comments.index', ['comments' => $comments]);
    }
}
