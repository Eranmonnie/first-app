<x-drop-down>
    <x-slot name="trigger">

        <button class="flex-1 py-2 pl-3 pr-3  text-sm font-semiboldlg: w-full  flex justify-between mb-auto lg:flex justify-between mb-auto" style="justify-content: space-between" >
            <div class="text-left">

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

    <x-dropdown-item href="/?category={{$category->name}}"
    :setting="isset($categoryname)&& $categoryname->is($category)" 
    >

    {{ucwords($category->name)}}

    </x-dropdown-item>
     
    @endforeach

</x-drop-down>