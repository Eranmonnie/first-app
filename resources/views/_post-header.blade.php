<header class="max-w-xl mx-auto mt-20 text-center" style="margin-bottom:3 em;">
    <h1 class="text-4xl my-3">
        Latest <span class="text-blue-500">Laravel From Scratch</span> News
    </h1>

   
    <div class="relative lg:inline-flex items-center bg-gray-100 rounded-xl my-2 ">

        <div x-data="{show : false}" @click.away="show=false">
            <button @click="show = !show" class="flex-1 py-2 pl-3 pr-9  text-sm font-semiboldlg: w-full text-left flex lg:inline-flex">
                {{isset($categoryname) ?ucwords($categoryname->name): 'Categories'}}  
            </button>

            <div x-show="show" class="py-2 absolute bg-gray-100 w-full mt-1 rounded-xl z-50 "style="display:none">
                <a href="/" class="block text-left px-3 text-sm leading-6 hover:bg-blue-500 focus:bg-blue-500 hover:text-white focus:text-whote">All</a>
                @foreach($categories as $category)
                <a href="/posts/category/{{$category->name}}" class="block text-left px-3 text-sm leading-6 hover:bg-blue-500 focus:bg-blue-500 hover:text-white focus:text-whote {{isset($categoryname)&& $categoryname->id === $category->id ? 'bg-blue-500 text-white' : '' }}">{{ucwords($category->name)}}</a>
                @endforeach
            </div>

        </div>
        </div>
        {{-- <select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold"> <option value="category" disabled selected>Category
        </option>
        <option value="personal"> Personal</option>
        <option value="business">Business</option>
        </select>
         --}}
            
    </div>


        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="/">

                   
                <input type="text"
                       name="search"
                       placeholder="Find something"
                       class="bg-transparent placeholder-black font-semibold text-sm"
                       value="{{ request('search') }}"
                >
            </form>
        </div>
   

</header>