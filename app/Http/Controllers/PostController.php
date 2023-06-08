<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Validation\Rule;

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
          $attributes =  request()->validate([
                'title'=>['required'],
                'link' =>['required', Rule::unique('posts', 'link')],
                'snippet'=>['required'],
                'body'=>['required'],
                'thumbnail'=> ['required', 'image'],
                'category_id'=>['required', Rule::exists('categories', 'id')],
            ]);

        // $attributes = request()->except('_token', 'thumbnail');
       
            $attributes['user_id'] = auth()->id();

            $attributes['thumbnail'] =  request()->file('thumbnail')->store('thumbnails');

            Post::create($attributes);
            session()->flash('success', 'post created successfully');

            return redirect('/');
        }


}
