@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-8">
    <div class="w-full max-w-xs mx-auto">
        <form action="{{ route('bukus.store') }}" method="POST" enctype="multipart/form-data" class="px-8 pt-6 pb-8 mb-4 bg-white rounded shadow-md">
            @csrf
            <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700" for="username">
                    Username
                </label>
                <input name="username" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
            </div>
            <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700" for="author">
                    Author
                </label>
                <input name="author" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="author" type="text" placeholder="Author">
            </div>
            <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700" for="status_publis">
                    Status Publis
                </label>
                <input name="status_publis" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="status_publis" type="text" placeholder="Status Publis">
            </div>
            <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700" for="no_publis">
                    No Publis
                </label>
                <input name="no_publis" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="no_publis" type="text" placeholder="No Publis">
            </div>
            <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700" for="text_menulis">
                    Text Menulis
                </label>
                <textarea name="text_menulis" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="text_menulis" placeholder="Text Menulis"></textarea>
            </div>
            <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700" for="cover_image">
                    Cover Image
                </label>
                <input name="cover_image" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="cover_image" type="file">
            </div>
            <div class="flex items-center justify-between">
                <button class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline" type="submit">
                    Add Book
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
