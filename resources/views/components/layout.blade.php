<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sekolah Web</title>
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/ed3c904095.js" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.1/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-700 text-gray-800">    
    {{ $slot }}
</body>
</html>
