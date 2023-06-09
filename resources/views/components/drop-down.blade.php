
@props(['trigger'])
<div x-data="{show : false}" @click.away="show=false">
    <div @click="show = !show">
        {{$trigger}}
    </div>

    <div x-show="show" class="py-2 absolute bg-gray-100 w-full mt-1 rounded-xl z-50 "style="display:none; max-height:200px; overflow:auto;">
       {{$slot}}
    </div>

</div>