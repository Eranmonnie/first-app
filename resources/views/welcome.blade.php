<x-layout>
        
        <h1>Posts</h1>
        @foreach ($posts as $post)
        <article>
            <h1><a href="/post/{{$post->link}}">{{$post->title}}</a></h1>
            <a href="/posts/category/{{$post->Category->name}}"><h4>{{$post->Category->name}}</h4></a>  
            <h3>{{$post->date}}</h3>
            <p>{{$post->snippet}}</p>
            

        </article>
        @endforeach
        
</x-layout>