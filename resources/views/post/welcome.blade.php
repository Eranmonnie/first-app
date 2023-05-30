<x-layout>

    @include ('post._post-header')

    @if ($posts->count())
        <x-post-grid :posts="$posts"/>
        {{$posts->links()}}
    @else

    <p class="text-center">NO posts yet come back later</p>

    @endif
        
</x-layout>