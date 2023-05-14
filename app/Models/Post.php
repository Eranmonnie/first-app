<?php
namespace App\Models;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post{

    public $title;
    public $snippet;
    public $date;
    public $body;
    public $link;
    public function __construct($title, $snippet, $body, $date, $link){

        $this->title = $title;
        $this->snippet = $snippet;
        $this->body = $body;
        $this->link = $link;
        $this->date = $date;

    }
    public static function all(){
       $file =  File::files(resource_path('posts/'));
       $doc =  array_map(fn ($file)=> YamlFrontMatter::parseFile($file) , $file);
       return $doc;

    }
    public static function find($slug){
        $path = base_path ("/resources/posts/{$slug}-post.html");
        if (! file_exists($path)){
           throw new ModelNotFoundException();
        }

        return cache()->remember("posts.{$slug}",1000, fn ()=> file_get_contents($path));
        }
}