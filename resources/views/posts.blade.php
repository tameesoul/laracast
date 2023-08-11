<x-layout>
<article>
         @foreach($posts as $post)  

        <h1> 
            <a href="/post/{{$post->slug}}">

          {{$post->title}} 
        
          </a>
        </h1>
        <a href="categories/{{$post->category->slug}}">{{$post->Category->name}}</a>
        <div>
            {{$post->excerpt }}
        </div>
    </article>
     @endforeach 
 </x-layout>
