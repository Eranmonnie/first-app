<header class="max-w-xl mx-auto mt-20 text-center" style="margin-bottom:3em;">
    <h1 class="text-4xl my-3">
        Latest <span class="text-blue-500">Laravel From Scratch</span> News
    </h1>

   
    <div class="relative lg:inline-flex items-center bg-gray-100 rounded-xl my-2 space-y-0 lg:space-x-4">

        <x-drop-down>
            <x-slot name="trigger">

                <button class="flex-1 py-2 pl-3 pr-3  text-sm font-semiboldlg: w-full text-left flex justify-between mb-auto lg:flex justify-between mb-auto" style="justify-content: space-between" >
                    <div>

                        {{isset($categoryname) ?ucwords($categoryname->name): 'Categories'}}  
               
                    </div>
                   

                <svg width="22" height="22" viewBox="0 0 22 22" class="text-right transform -rotate-90" >
                    <g fill="none" fill-rule="evenodd">
                        <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                        </path>
                        <path class="fill-current"
                              d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                        </path>
                    </g>
                </svg>

            </button>

            </x-slot>

        <x-dropdown-item href="/">All</x-dropdown-item>
            @foreach($categories as $category)

            <x-dropdown-item href="/posts/category/{{$category->name}}"
            :setting="isset($categoryname)&& $categoryname->is($category)" 
            >

            {{ucwords($category->name)}}

            </x-dropdown-item>
             
            @endforeach

        </x-drop-down>
        </div>

        {{-- <div class="relative lg:inline-flex items-center bg-gray-100 rounded-xl my-2 ">

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
            </div> --}}
            



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