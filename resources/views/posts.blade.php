<x-layout>
<article>
         @foreach($posts as $post)  

        <h1> 
            <a href="/post/{{ $post->id }}">

          {{$post->title}} 
        
          </a>
        </h1>
        <div>
            {{$post->excerpt }}
        </div>
    </article>
     @endforeach 
 </x-layout>
