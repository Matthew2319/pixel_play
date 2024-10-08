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
            <table class="table">
                <thead>
                <tr>
    <td>Post ID</td>
    <td>Title</td>
    <td>Description</td>
    <td>User ID</td>
    <td>Created at</td>
    </tr>
    </thead>

    <tbody>

    <?php $i=1?>
    @foreach ($posts as $post)
    <tr>
        <th scope="row">{{$i++}}</th>
    <td>{{$post->title}}</td>
    <td>{{$post->desc}}</td>
    <td>{{$post->user_id}}</td>
    <td>{{$post->created_at->diffForHumans()}}</td>
    <td><button>Edit</button></td>
    <td><button>Delete</button></td>
    </tr>
    @endforeach
   
    </tbody>
                    </table>
                   
    </div>
    
    </div>
    
    </div>
    {{ $posts->links() }}
<!-- 
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div> -->

</x-app-layout>
