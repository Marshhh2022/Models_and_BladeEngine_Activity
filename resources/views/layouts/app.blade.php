<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Include Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <style>
        /* Custom font for header */
        .header-font {
            font-family: 'Pacifico', cursive;
        }
    </style>
</head>
<body>
    <header class="bg-pink-500 text-white p-4">
        <h1 class="text-3xl header-font hover:font-serif">Marjorie's Book List</h1>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-pink-500 text-white p-4 mt-4">
        <p>&copy; Marjorie's Book List</p>
    </footer>
</body>
</html>
