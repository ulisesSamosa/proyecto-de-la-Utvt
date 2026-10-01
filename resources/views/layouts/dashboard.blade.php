<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-screen overflow-hidden" style="background-color: #F6F7F9;" x-data="{ sidebarOpen: true }">
    <div id="app-shell" class="flex h-full">
        <!-- Sidebar -->
        <aside id="sidebar" class="w-64 bg-white border-r border-border flex-shrink-0" style="background-color: #FFFFFF; border-right: 1px solid #E4E7EC;">
            @include('components.dashboard.sidebar')
        </aside>

        <!-- App Content -->
        <div id="app-content" class="flex-1 flex flex-col overflow-hidden">
            <!-- Header -->
            <header id="header" class="h-16" style="background-color: #FFFFFF; border-bottom: 1px solid #E4E7EC;">
                @include('components.dashboard.header')
            </header>

            <!-- Main Content -->
            <main id="main-content" class="flex-1 overflow-y-auto" style="background-color: #F6F7F9;">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
