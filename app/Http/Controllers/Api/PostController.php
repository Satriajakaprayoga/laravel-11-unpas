<?php

namespace App\Http\Controllers\Api;

use App\Models\Post; // Pastikan impor kelas Post telah ditambahkan
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;

class PostController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        // Get posts
        // $posts = Post::latest()->paginate(5);

        // Return collection of posts as a resource
        // return PostResource::collection($posts);
    }
}
