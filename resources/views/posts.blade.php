<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <article>
         @foreach($posts as $post)  

        <h1> 
            <a href="/post/{{ $post->slug }}">

          {{$post->title}} 
        
          </a>
        </h1>
        <div>
            {{$post->excerpt }}
        </div>
    </article>
     @endforeach      
</body>
</html>