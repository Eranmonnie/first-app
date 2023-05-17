<x-layout>
<article>
    <h1>{{$post->title}}</h1>
   <a href="/posts/category/{{$post->Category->name}}"><h4>{{$post->Category->name}}</h4></a> 
   {!! $post->body!!} 
    <p>{{$post->date}}</p>
</article>
<a href="/">Go back</a>

</x-layout>