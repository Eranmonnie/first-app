<x-layout>
    
    <section class="px-6 py-8">

        <x-pannel class="max-w-md mx-auto">

            <form action="/admin/post/create" method="Post" enctype="multipart/form-data">
                @csrf
                    <x-form.input name="title"/>
                    <x-form.input name="slug"/>
                    <x-form.input name="thumbnail" type="file"/>
                    <x-form.textarea name="snippet"/>
                    <x-form.textarea name="body"/>
                    <div class="mb-6">
            
                        <label class="block mb-2 uppercase font-bold text-xs text-grey-700"
            
                            for="category"
                        >
                            category
            
                        </label>
            
                        <select name="category_id"
                                id="category_id"
                                >
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}" {{old('category_id') == $category->id ? 'selected': ''}}>{{$category->name}}</option>
                                @endforeach
                                
                        </select>
                    
                        @error('category_id')
                        <p class="text-red-500 text-xs mt-1">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                    
                   <x-form.button name="Post"/>
            </form>

        </x-pannel>

    </section>
   
</x-layout>