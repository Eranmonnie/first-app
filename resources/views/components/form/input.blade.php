@props(['name', 'type' => 'text'])

<div class="mb-6">

    <label class="block mb-2 uppercase font-bold text-xs text-grey-700"

        for="{{$name}}"
    >
        {{$name}}

    </label>

    <input class="border border-grey-400 p-2 w-full"
            type = "{{$type}}"
            name = "{{$name}}"
            id = "{{$name}}"
            value = "{{old($name)}}"
            required  
            {{$attributes}}
    >
    <x-form.error name="{{$name}}"/>
</div>