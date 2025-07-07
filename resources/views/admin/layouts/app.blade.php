<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Fondation PHM</title>
    <meta name="description" content="Interface d'administration de la Fondation PHM">
    
    @vite(['resources/css/admin.css', 'resources/js/admin_app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    @include('admin.layouts.header')

    <div id="admin-dashboard" class="admin-container">
        @yield('content')
    </div>

    @include('admin.layouts.footer')
</body>
</html>