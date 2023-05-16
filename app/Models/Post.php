<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // protected $guarded = ['id']; the oposite of fillable
    protected $fillable = ['title', 'sippet', 'body', 'link'];
    
    // public function getRouteKeyName(){
    //     return 'slug';
    // } specify the data to be searched by from url 
}
