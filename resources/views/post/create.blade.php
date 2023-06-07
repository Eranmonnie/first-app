<x-layout>
    
    <section class="px-6 py-8">

        <x-pannel class="max-w-sm mx-auto">

            <form action="/admin/post/create" method="Post">
                @csrf
                    <div class="mb-6">

                        <label class="block mb-2 uppercase font-bold text-xs text-grey-700"
            
                            for="title"
                        >
                            title
            
                        </label>
            
                        <input class="border border-grey-400 p-2 w-full"
                                type = "text"
                                name = "title"
                                id = "title"
                                value = "{{old('title')}}"
                                required  
                        >
                        @error('title')
                        <p class="text-red-500 text-xs mt-1">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
            
                    <div class="mb-6">
            
                        <label class="block mb-2 uppercase font-bold text-xs text-grey-700"
            
                            for="exert"
                        >
                            exert
            
                        </label>
            
                        <textarea 
                            name="exert"
                            rows="5"
                            class="w-full text-sm border border-gray-300 focus: outline-none"
                            placeholder="post here!!"
                            required>
                        
                        </textarea>
                        @error('exert')
                        <p class="text-red-500 text-xs mt-1">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                    
                    <div class="mb-6">
            
                        <label class="block mb-2 uppercase font-bold text-xs text-grey-700"
            
                            for="body"
                        >
                            body
            
                        </label>
            
                        <textarea 
                            name="body"
                            rows="5"
                            class="w-full text-sm border border-gray-300 focus: outline-none"
                            placeholder="post here!!"
                            required>
                        
                        </textarea>
                        @error('body')
                        <p class="text-red-500 text-xs mt-1">
                            {{$message}}
                        </p>
                        @enderror
                    </div>

                    <div class="mb-6">
            
                        <label class="block mb-2 uppercase font-bold text-xs text-grey-700"
            
                            for="category"
                        >
                            category
            
                        </label>
            
                        <select name="category"
                                id="category"
                                >
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                                
                        </select>
                    
                        @error('category')
                        <p class="text-red-500 text-xs mt-1">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                    

                    <div class="flex justify-end mt-6 border-t border-gray-200 pt-6">
                        <button type="submit" class="bg-blue-500 text-white uppercase rounded-full text-xs font-semibold py-2 px-10 hover:bg-blue-600">Post</button>
                    </div>
            </form>

        </x-pannel>

    </section>
   
</x-layout>