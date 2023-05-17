<x-layout>
<article>
    <h1>{{$post->title}}</h1>
   <h3>by {{$post->User->name}} <a href="/post/{{$post->link}}">{{$post->title}}</a></h3> 
   {!! $post->body!!} 
    <p>{{$post->date}}</p>
</article>
<a href="/">Go back</a>

</x-layout>