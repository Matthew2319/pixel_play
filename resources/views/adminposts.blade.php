<title>Posts</title>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List of Posts') }}
        </h2>
    </x-slot>

    <div>
    <table>
@foreach ($posts as $post)
<tr>
<td>{{$post->title}}</td>
<td>{{$post->desc}}</td>
<td>{{$post->user_id}}</td>
<td>{{$post->created_at->diffForHumans()}}</td>
</tr>
@endforeach
</table>
</div>

</x-app-layout>
