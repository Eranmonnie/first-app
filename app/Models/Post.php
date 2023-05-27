<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // protected $guarded = ['id']; the oposite of fillable

    //for eager loading we can use 
    protected $with = ['Category', 'User'];
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

    public function scopeFilter($query, array $fillable){
        $query->when($fillable['search'] ?? false, fn($query, $search)=>
            $query
                ->where('title', 'like', '%' . $search . '%')
                ->orwhere('snippet', 'like', '%' . $search . '%'));


        $query->when($fillable['category'] ?? false, fn($query, $category)=>
            // $query
            //     ->whereExists(fn($query)=>
            //         $query->from('categories')
            //             ->whereColumn('categories.id','posts.category_id')
            //             ->where('categories.name', $category)
            //             )
            $query->whereHas('Category', fn($query)=>
            $query->where('name', $category))
                    );
    
    

                
    }
    
}
