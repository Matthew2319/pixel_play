<title>Posts</title>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List of Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            
            <table class="table table-striped-columns">
            <tr>
    <td>Title</td>
    <td>Description</td>
    <td>User ID</td>
    <td>Created at</td>
    </tr>
    @foreach ($posts as $post)
    <tr>
    <td>{{$post->title}}</td>
    <td>{{$post->desc}}</td>
    <td>{{$post->user_id}}</td>
    <td>{{$post->created_at->diffForHumans()}}</td>
    <td><button>Edit</button></td>
    <td><button>Delete</button></td>
    </tr>
    @endforeach
                </table>
            </div>
        </div>
    </div>

</x-app-layout>
