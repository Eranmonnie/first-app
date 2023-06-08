
@props(['data', 'name', 'value'])
<div class="mb-6">
            
    <label class="block mb-2 uppercase font-bold text-xs text-grey-700"

        for="{{$name}}"
    >
        {{$name}}

    </label>

    <select name="{{$value}}"
            id="{{$value}}"
            >
            @foreach ($data as $category)
                <option value="{{$category->id}}" {{old('category_id') == $category->id ? 'selected': ''}}>{{$category->name}}</option>
            @endforeach
            
    </select>

    <x-form.error name="{{$value}}"/>
</div>