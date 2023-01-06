<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Form to edit selected category -->
                    <form method= "POST"action="{{ route('posts.update', $post) }}">
                        @method('PUT')
                        @csrf <!-- to prevent multiple form submission of the same form from elsewhere -->
                        Title:
                        <br>
                        <input type="text" name="title" value="{{ $post->title }}" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                        <br><br>
                        Post Text:
                        <br>
                        <input type="text" name="post_text" value="{{ $post->post_text }}" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                        <br><br>
                        Category:
                        <br>
                        <select name="category_id" id="" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" 
                                    @selected($category->id == $post->category_id )>
                                {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        <br><br>
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            Update
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
