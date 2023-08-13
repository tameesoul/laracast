<x-layout>
@include('_post-header');
        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        <x-post-featured/>
            <div class="lg:grid lg:grid-cols-2">
            <x-post-card/>
            <x-post-card/>
            </div>

            <div class="lg:grid lg:grid-cols-3">
                <x-post-card/>
                <x-post-card/>
                <x-post-card/>
            </div>
          </main>

<!-- <article>
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
     @endforeach  -->
 </x-layout>
