<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container px-4 py-8 mx-auto">
        @if ($books->isEmpty())
            <div class="p-6 bg-white rounded-lg shadow-lg">
                <h3 class="text-2xl font-bold text-gray-900">Masukkan karya mu</h3>
            </div>
        @else
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($books as $book)
                    <div class="p-6 bg-white rounded-lg shadow-lg">
                        @if ($book->cover_image)
                            <img src="{{ asset('images/' . $book->cover_image) }}" alt="Gambar" class="object-cover w-full h-48 rounded-md">
                        @else
                            <div class="flex items-center justify-center w-full h-48 bg-gray-200 rounded-md">
                                <span class="text-gray-500">No Image</span>
                            </div>
                        @endif
                        <h3 class="mt-4 text-2xl font-bold text-gray-900">{{ $book->username }}</h3>
                        <a href="{{ route('books.show', $book->id) }}" class="block w-full px-3 py-2 mt-4 text-sm font-semibold text-center text-white bg-indigo-600 rounded-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Read More</a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</x-layout>
