@props(['name'])
@error($name)
<p class="mt-3 text-red-500 italic text-xs font-semibold">{{$message}}</p>
@enderror
