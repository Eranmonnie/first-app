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

       return collect($file)
       ->map(fn($file)=>YamlFrontMatter::parseFile($file))
       ->map(fn($document)=>
        new Post(
        $document->title,
        $document->snippet,
        $document->body(),
        $document->date,
        $document->link
        )
    );

    }
    public static function find($slug){
       return static::all()->firstWhere('link', $slug); 
    }
}