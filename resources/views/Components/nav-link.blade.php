@props(['active' => False])

<a class="{{ $active ? "bg-gray-400 text-white" : "text-gray-650 hover:bg-gray-300 hover:text-white"}} rounded-md px-3 py-2 text-sm font-medium"
   aria-current="{{ $active ? 'page' : 'false'}}"
{{$attributes}}
>{{$slot}}</a>
