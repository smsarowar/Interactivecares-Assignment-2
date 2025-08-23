@extends('admin.layouts.app')
@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md mb-8 max-w-3xl mx-auto">
        <h2 class="text-xl font-bold mb-4 text-gray-800">Create New Post</h2>
        <form action="{{route('post.store')}}" method="POST" class="space-y-6">
            @csrf

            <!-- Title -->
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Title <span class="text-red-500">*</span></label>
                <input type="text" id="title" name="title" required
                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500">

                @error('title')
                <div style="color:red">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <!-- Slug -->
{{--            <div>--}}
{{--                <label for="slug" class="block text-sm font-medium text-gray-700">Slug <span class="text-red-500">*</span></label>--}}
{{--                <input type="text" id="slug" name="slug" required--}}
{{--                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500">--}}
{{--            </div>--}}

            <!-- Parent Category -->
                        <div>
                            <label for="parent_category" class="block text-sm font-medium text-gray-700">Category <span class="text-red-500">*</span></label>
                            <select id="category" name="category_id" required
                                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 bg-white focus:ring-blue-500 focus:border-blue-500">
                                <option value="">Select Parent Category</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach


{{--                                <option value="react">React</option>--}}
{{--                                <option value="typescript">TypeScript</option>--}}
                                <!-- Add more options dynamically here -->
                            </select>

                            @error('category_id')
                            <div style="color:red">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

            <!-- Description -->
                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700">Description <span class="text-red-500">*</span></label>
                            <textarea id="description" name="content" required rows="4"
                                      class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
                            @error('content')
                            <div style="color:red">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

            <!-- Submit Button -->
            <div class="text-right">
                <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-4 py-2 rounded-md">
                    Create Post
                </button>
            </div>
        </form>
    </div>
@endsection
