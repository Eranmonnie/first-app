@props(['name'])
<div class="mb-6">
            
    <label class="block mb-2 uppercase font-bold text-xs text-grey-700"

        for="{{$name}}"
    >
        {{$name}}
    </label>

    <textarea 
        name="{{$name}}"
        rows="5"
        class="w-full text-sm border border-gray-300 focus: outline-none"
        placeholder="post here!!"
        required>{{old($name)}}
    </textarea>
    <x-form.error name="{{$name}}"/>
</div>