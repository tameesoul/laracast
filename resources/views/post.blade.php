<h1>{!!$post->title!!}</h1>
 <div>
    {!!$post->body!!}
 </div>
 <a href="categories/{{$post->category->slug}}">{{$post->Category->name}}</a>