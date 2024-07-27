<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Read Books</title>


    @vite('resources/css/app.css')

    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    {{-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> --}}
    {{-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea#description',
            plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat',
            toolbar_mode: 'floating',
        });
    </script> --}}
</head>
<body class="h-full">
    <div class="min-h-full">
        <x-navbar></x-navbar>

        <x-header>{{ $title }}</x-header>

        <main>
          <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
            {{ $slot }}
          </div>
        </main>
    </div>
</body>
</html>
