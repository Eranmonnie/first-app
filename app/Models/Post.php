<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // protected $guarded = ['id']; the oposite of fillable

    //for eager loading we can use protectes $with = ['category', 'user']
    protected $fillable = ['title', 'sippet', 'body', 'link'];

    // public function getRouteKeyName(){
    //     return 'slug';
    // } specify the data to be searched by from url 

    //specification of relationships 
    //each post should belong to only one category and can only have one foreign key to it 
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    
}
