<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function posts()
    {
        dd('blog posts');
    }

    public function single()
    {
        dd('blog single');
    }

    public function category()
    {
        dd('blog category');
    }
}
