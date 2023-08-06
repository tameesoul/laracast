<?php 

namespace App\Models;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;
class Post
{

    public $title;
    public $slug; 
    public $excerpt; 
    public $date; 

    public $body; 


    public function __construct($title,$excerpt , $date , $body , $slug)
    {
        $this->title = $title; 
        $this->excerpt = $excerpt; 
        $this->date = $date; 
        $this->body = $body; 
        $this->slug =   $slug; 
    }

    public static function all()
    {
      return cache()->forever('posts.all',function{
        return $posts = collect(File::files(resource_path("posts")))
        ->map(function($file){
            return YamlFrontMatter::parseFile($file);
        })
        ->map(function($document){
            return  new Post(
                $document->title, 
                $document->excerpt, 
                $document->date,
                $document->body(),
               $document->slug 
            );
        })->sortByDesc('date');
      });
    
    }
    public static function find($slug)
    { 
    return static::all()->firstWhere('slug',$slug);
    }
}