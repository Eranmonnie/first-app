<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
        public function index(){
            $post = Post::latest()->filter(request(['search','category']))->get();
 
            return view('welcome', [
                'posts'=> $post,
                'categoryname'=> Category::firstWhere('name', request('category'))
                    ]);
            }

        public function showByPost(Post $post) {
            //automatically finds post by its slug in the db from url
            return view('post', [
                'post'=>$post,
            ]);
        }

        // public function showByCategory(Category $category){

        //     return view('welcome', [
        
        //         //find posts where category->name == slug;
        //         //eager loading with load
        //         'posts'=>$category->Post,
        //         'categoryname'=>$category,
        //         "categories"=> Category::all(),
        //     ]);
        // }
}
