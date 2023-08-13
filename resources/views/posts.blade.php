<x-layout>
<article>
         @foreach($posts as $post)  
        <h1> 
            <a href="/post/{{$post->slug}}">
          {{$post->title}} 
          </a>
        </h1>
     by <a href="authors/{{$post->author->username}}">{{$post->author->name}}</a> in <a href="categories/{{$post->category->slug}}">{{$post->Category->name}}</a>
        <div>
            {{$post->excerpt }}
        </div>
    </article>
     @endforeach 
 </x-layout>
