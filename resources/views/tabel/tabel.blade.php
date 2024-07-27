<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container mx-auto">
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-lg shadow-lg">
                <thead>
                    <tr class="text-sm leading-normal text-gray-600 uppercase bg-gray-200">
                        <th class="px-6 py-3 text-left">Gambar</th>
                        <th class="px-6 py-3 text-left">Nama</th>
                        <th class="px-6 py-3 text-left">Author</th>
                        <th class="px-6 py-3 text-left">Status</th>
                        <th class="px-6 py-3 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-sm font-light text-gray-600">
                    @foreach ($books as $book)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="px-6 py-3 text-left">
                                @if ($book->cover_image)
                                    <img src="{{ asset('images/' . $book->cover_image) }}" alt="Gambar" class="w-20 h-20 rounded-full">
                                @else
                                    <span class="text-gray-500">No Image</span>
                                @endif
                            </td>
                            <td class="px-6 py-3 text-left">{{ $book->username }}</td>
                            <td class="px-6 py-3 text-left">{{ $book->author }}</td>
                            <td class="px-6 py-3 text-left">
                                @if ($book->status == 'Published')
                                    <span class="px-3 py-1 text-xs text-green-600 bg-green-200 rounded-full">Published</span>
                                @else
                                    <span class="px-3 py-1 text-xs text-white bg-red-200 rounded-full">Not Published</span>
                                @endif
                            </td>
                            <td class="px-6 py-3 text-center">
                                <div class="flex items-center justify-end mt-1 gap-x-6">
                                    <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-3 py-2 text-sm font-semibold text-white bg-red-500 rounded-md shadow-sm hover:bg-red-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Hapus</button>
                                    </form>
                                    <a href="{{ route('books.edit', $book->id) }}" class="px-3 py-2 text-sm font-semibold text-white bg-blue-400 rounded-md shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Edit</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
