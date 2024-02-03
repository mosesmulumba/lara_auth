<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{route('posts.store')}}">
                         @csrf
                        Title:
                        <br />
                        <input type="text" name="name" value="{{$post->title}}" class="block font-medium text-sm text-gray-700 rounded-md py-2 pt-2 ">
                        <br/>
                        Post Text:
                        <textarea name="post_text"  class="block font-medium text-sm text-gray-700 rounded-md py-2 pt-2 " >{{$post->post_text}}</textarea>
                        <br/>
                        Category:
                        <select name="category_id" class="block font-medium text-sm text-gray-700 rounded-md py-2 pt-2 ">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}"
                                    @selected($category->id == $post->category_id)>{{$category->name}}
                                </option>
                            @endforeach
                        </select>
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
