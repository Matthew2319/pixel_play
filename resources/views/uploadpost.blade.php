<title>Add</title>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add a post') }}
        </h2>
    </x-slot>

    <form action="{{ route('adminposts') }}" method="POST" id="postForm">
    @csrf
    <div class="mb-4">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li> {{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <label for="title" class="block text-gray-700 font-bold mb-2">Title</label>
        <input type="text" name="title" id="title" class="w-full border rounded px-4 py-2 @error('title') border-red-500 @enderror" value="{{ old('title') }}" required>
        @error('title')
            <p class="text-red-500 text-sm mt-2">{{ $title }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="desc" class="block text-gray-700 font-bold mb-2">Description</label>
        <textarea name="desc" id="desc" class="w-full border rounded px-4 py-2 @error('desc') border-red-500 @enderror" rows="5" required>{{ old('desc') }}</textarea>
        @error('desc')
            <p class="text-red-500 text-sm mt-2">{{ $desc }}</p>
        @enderror
    </div>

    <!-- <div class="mb-4">
        <label for="user_id" class="block text-gray-700 font-bold mb-2">Desc ID</label>
        <input type="number" name="user_id" id="user_id" class="w-full border rounded px-4 py-2 @error('desc_id') border-red-500 @enderror" value="{{ old('user_id') }}" required>
        @error('user_id')
            <p class="text-red-500 text-sm mt-2">{{ $user_id }}</p>
        @enderror
    </div> -->


    <div class="flex justify-end mt-8">
        <button type="submit" class="text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:bg-indigo-700 rounded-md px-4 py-2" id="submitBtn">
            Create Post
        </button>
    </div>
</form>

</x-app-layout>
