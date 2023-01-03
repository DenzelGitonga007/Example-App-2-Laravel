<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Link for adding a new category -->
                    <a href="{{  route('categories.create') }}">Add New Post</a>
                    <br> <br>
                    <!-- Table for all categories -->
                    <table>
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Post Text</th>
                                <th>Category</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
