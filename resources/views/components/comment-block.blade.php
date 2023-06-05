@auth
<x-pannel>
<form  method="POST" action="/post/comment" class="#">
    @csrf
    <input type="hidden" name="post_id" value="{{$post->id}}">
    <header class="flex items-center">
        <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="profile picture" width="40" height="40" class="rounded-full">
        <h2 class="ml-3"> Want to participate?</h2>
    </header>

    <div class="mt-6">
        <textarea 
            name="body"
            rows="5"
            class="w-full text-sm focus: outline-none focus:ring"
            placeholder="comment here!!"
            required>
           
        </textarea>
        @error('body')
            <span class="text-xm text-red-500">
                {{ $message }}
            </span>
        @enderror
    </div>

    <div class="flex justify-end mt-6 border-t border-gray-200 pt-6">
        <button type="submit" class="bg-blue-500 text-white uppercase rounded-full text-xs font-semibold py-2 px-10 hover:bg-blue-600">Post</button>
    </div>

</form>
</x-pannel>

@else
    <p class="font-semibold">
        <a href="/signup" class="hover-underline">Register</a> or 
        <a href="/login" class="hover-undreline">Login</a> to leave a commrnt 
    </p>
@endauth
