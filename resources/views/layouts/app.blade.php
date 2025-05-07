<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koperasi Universitas Jember</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">
    @include('components.navbar')

    <main class="flex-1 container mx-auto px-4 py-6">
        @yield('content')
    </main>

    @include('components.footer')
</body>
</html>
