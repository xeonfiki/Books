<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="py-24 bg-white sm:py-10">
        <div class="px-6 mx-auto max-w-7xl lg:px-8">
            <form id="bookForm" action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="space-y-12">
                    <div class="pb-12 border-b border-gray-900/10">
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Add New Book</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">This information will be displayed publicly, so be careful what you share.</p>
                        <div class="grid grid-cols-1 mt-5 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-4">
                                <div class="sm:col-span-3">
                                    <label for="username" class="block mt-2 text-sm font-medium leading-6 text-gray-900">Username</label>
                                    <div class="mt-2">
                                        <input type="text" name="username" id="username" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="author" class="block mt-2 text-sm font-medium leading-6 text-gray-900">Author</label>
                                    <div class="mt-2">
                                        <input type="text" name="author" id="author" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="status" class="block mt-2 text-sm font-medium leading-6 text-gray-900">Status</label>
                                    <div class="mt-2">
                                        <select id="status" name="status" autocomplete="status-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            <option>Published</option>
                                            <option>Not Published</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-span-full">
                                <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                                <div class="mt-1">
                                    <textarea id="description" name="description" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                </div>
                            </div>

                            <div class="col-span-full">
                                <label for="cover_image" class="block text-sm font-medium leading-6 text-gray-900">Cover Photo</label>
                                <div id="uploadContainer" class="flex justify-center px-6 py-10 mt-2 border border-dashed rounded-lg border-gray-900/25">
                                    <div class="text-center">
                                        <svg class="w-12 h-12 mx-auto text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                                        </svg>
                                        <div class="flex mt-4 text-sm leading-6 text-gray-600">
                                            <label for="cover_image" class="relative font-semibold text-indigo-600 bg-white rounded-md cursor-pointer focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                                <span>Upload Cover Book</span>
                                                <input id="cover_image" name="cover_image" type="file" class="sr-only" accept="image/*" onchange="previewImage(event)">
                                            </label>
                                            <p class="pl-1">or drag and drop</p>
                                        </div>
                                        <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                                    </div>
                                </div>
                                <img id="imagePreview" class="hidden w-full max-w-xs mt-4 rounded-lg" alt="Cover Image Preview"/>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-end mt-6 gap-x-6">
                        <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                        <button type="submit" class="px-3 py-2 text-sm font-semibold text-white bg-indigo-600 rounded-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" onclick="showAlert()">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function showAlert() {
            alert('Data berhasil disimpan ke database!');
        }

        function previewImage(event) {
            const image = document.getElementById('imagePreview');
            const uploadContainer = document.getElementById('uploadContainer');
            const file = event.target.files[0];

            if (file) {
                image.src = URL.createObjectURL(file);
                image.classList.remove('hidden');
                uploadContainer.classList.add('hidden');
                image.onload = () => {
                    URL.revokeObjectURL(image.src); // Free memory
                }
            } else {
                image.classList.add('hidden');
                uploadContainer.classList.remove('hidden');
            }
        }
    </script>
</x-layout>
