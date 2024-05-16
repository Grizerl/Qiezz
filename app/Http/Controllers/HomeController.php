<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $members=Post::all()->count();

        return view('admin.index',[
            'members'=>$members,
        ]);
    }
}
