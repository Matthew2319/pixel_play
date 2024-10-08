<title>Dashboard</title>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <link rel="stylesheet" href="css/templatemo-style.css">

    @if (session('success'))
    <div class="alert alert-success" role="alert">
        <button class="btn-close" data-bs-dismiss="alert" area-lavel="Close"></button>
    {{session('success')}}
    </div>
    @endif

<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <table class="table">
    
    @if ($post->user_id == Auth::user()->id)
    <tr>
    <td>{{$post->title}}</td>
    <td>{{$post->desc}}</td>
    <td>{{$post->created_at->diffForHumans()}}</td>
    </tr>
    @endif
   
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
