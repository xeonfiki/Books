<x-layout>
    <x-slot:title>{{ $book->title }}</x-slot:title>
    <div class="container px-4 py-8 mx-auto">
        <div class="p-6 bg-white rounded-lg shadow-lg">
            @if ($book->cover_image)
                <img src="{{ asset('images/' . $book->cover_image) }}" alt="Gambar" class="object-cover w-full h-48 rounded-md">
            @else
                <div class="flex items-center justify-center w-full h-48 bg-gray-200 rounded-md">
                    <span class="text-gray-500">No Image</span>
                </div>
            @endif
            <h3 class="mt-4 text-2xl font-bold text-gray-900">{{ $book->username }}</h3>
            <div class="mt-3">
                <p class="overflow-hidden text-base leading-7 text-gray-600 break-words">{{ $book->description }}</p>
            </div>
            <p class="mt-1 text-sm text-gray-700">Author: {{ $book->author }}</p>
            <p class="px-3 py-1 mt-2 text-xs text-green-600 bg-green-200 rounded-full">Status: {{ $book->status }}</p>
        </div>
    </div>
</x-layout>
