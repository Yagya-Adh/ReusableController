<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends BaseController
{
    protected $model = Post::class;
}
