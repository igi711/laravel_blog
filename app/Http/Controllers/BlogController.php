<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        $blog_posts = DB::select('select * from blog_posts');
       
        return view('index', ['blog_posts' => $blog_posts]);
    }
    
}
