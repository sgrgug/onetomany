<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function getAuthor()
    {
        $id = 1;

        // return Author::with('posts')->find($id);

        $data = [
            'author' => Author::with('posts')->find($id),
        ];

        return view('author', $data);
    }
}
