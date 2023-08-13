<h1>{!!$post->title!!}</h1>
 <div>
    {!!$post->body!!}
 </div>
 by <a href="authors/{{$post->author->username}}">{{$post->author->name}}</a> in <a href="categories/{{$post->category->slug}}">{{$post->Category->name}}</a>