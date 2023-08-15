<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use App\Models\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PostController::class ,'index'])->name('home');

Route::get('post/{post:slug}',[PostController::class , 'show'])->name('post');

Route::get('categories/{category:slug}',function(Category $category)
{
    return view('posts', [
        "posts"=>$category->posts, 
       "categories"=>Category::all()
    ]);
});
Route::get('authors/{author:username}',function(User $author)
{
    return view('posts', [
        "posts"=>$author->posts
    ]);
});
