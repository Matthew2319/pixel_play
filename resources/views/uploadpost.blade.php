<title>Add</title>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add a post') }}
        </h2>
    </x-slot>
<!-- Form to Create Post -->
<form action="{{ route('adminposts') }}" method="GET" id="postForm">
                        @csrf
                        <div class="mb-4">
                            <label for="title" class="block text-gray-700 font-bold mb-2">Title</label>
                            <input type="text" name="title" id="title" class="w-full border rounded px-4 py-2 @error('title') border-red-500 @enderror" value="{{ old('title') }}" required>
                            @error('title')
                                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="content" class="block text-gray-700 font-bold mb-2">Description</label>
                            <textarea name="content" id="content" class="w-full border rounded px-4 py-2 @error('content') border-red-500 @enderror" rows="5" required>{{ old('content') }}</textarea>
                            @error('content')
                                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="content" class="block text-gray-700 font-bold mb-2">Desc ID</label>
                            <textarea name="content" id="content" class="w-full border rounded px-4 py-2 @error('content') border-red-500 @enderror" rows="5" required>{{ old('content') }}</textarea>
                            @error('content')
                                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Submit Button (Styled like Logout Button with White Text) -->
                        <div class="flex justify-end mt-8">
                            <button type="submit" class="text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:bg-indigo-700 rounded-md px-4 py-2" id="submitBtn">
                                Create Posts
                            </button>
                        </div>
</x-app-layout>
