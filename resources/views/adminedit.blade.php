<title>Edit</title>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit') }}
        </h2>
    </x-slot>
    <div>
    <table>
@foreach ($users as $user)
<tr>
<td>{{$user->name}}</td>
<td>{{$user->email}}</td>
<td>{{$user->created_at->diffForHumans()}}</td>
</tr>
@endforeach
</table>
</div>

</x-app-layout>
