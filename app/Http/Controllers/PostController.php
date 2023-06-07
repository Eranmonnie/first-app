<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
        public function index(){
            $post = Post::latest()->filter(request(['search','category', 'user']))->paginate(3)->withQueryString();
 
            return view('post.welcome', [
                'posts'=> $post,
                    ]);
            }

        public function showByPost(Post $post) {
            //automatically finds post by its slug in the db from url
            return view('post.post', [
                'post'=>$post,
            ]);
        }

        public function create(){
            return view('post.create',[
                'categories'=>Category::all()
            ]);
        }
        public function store(){
            dd(request()->all());
        }


}
