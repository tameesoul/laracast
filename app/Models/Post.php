<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $with = ["category" , "author"];
    protected $guarded = ["id"];
   // protected $fillable = ['title', 'excerpt', 'body'];


   public function scopeFilter($query, array $filter)
   {
       $query->when($filter['search'] ?? false, function ($query, $search) {
           $query->where('title', 'like', '%' . $search . '%')
               ->orWhere('body', 'like', '%' . $search . '%');
       });

       $query->when($filter['category'] ?? false , fn($query ,$category)=>
       $query->whereHas('category',fn($query)=>
       $query->where('slug', $category)
       )
    );
   }
   public function getRouteKeyName()
   {
    return "slug";
   }
   public function category()
   {
    return $this->belongsTo(Category::class);
   }
   public function author()
   {
    return $this->belongsTo(User::class,"user_id");
   }

}
