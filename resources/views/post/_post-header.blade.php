<header class="max-w-xl mx-auto mt-20 text-center" style="margin-bottom:3em;">
    <h1 class="text-4xl my-3">
        Latest <span class="text-blue-500">Laravel From Scratch</span> News
    </h1>

   <div>
    
   
        <div class="relative lg:mr-3  lg:inline-flex items-center bg-gray-100 rounded-xl my-2 space-y-0 lg:space-x-4">

            <x-category-dropdown/>
        </div>

        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="/">
                @csrf
                @if(request('category'))
                <input type="hidden" name="category" value="{{request('category')}}">
                @endif

                <input type="text"
                    name="search"
                    placeholder="Find something"
                    class="bg-transparent placeholder-black font-semibold text-sm"
                    value="{{ request('search') }}"
                >
            </form>
        </div>
   
    </div>
</header>