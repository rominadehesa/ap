<!DOCTYPE html>
<html lang="es">

@include('frames.head', ['title' => 'Panel'])

<body class="bg-gray-100">

<div class="flex h-screen overflow-hidden">

    <!-- Sidebar -->
    <aside class="w-64 bg-[#1a0a19] text-white flex flex-col p-6">

        <h2 class="text-xl font-bold mb-10">Inmobiliaria</h2>

        <nav class="flex flex-col gap-2 text-sm">
            <a href=""
               class="px-4 py-2 rounded-xl bg-white/10 font-semibold">
                Propiedades
            </a>
        </nav>

        <div class="flex-1"></div>

        <div class="mt-10 text-sm opacity-70">
            Panel admin
        </div>

    </aside>

    <!-- Contenido -->
    <div class="flex-1 flex flex-col overflow-hidden">

        <!-- Topbar -->
        <header class="bg-white border-b px-8 py-4 flex justify-between items-center flex-shrink-0">

            <h1 class="font-semibold text-[#1a0a19]">
                Panel de control
            </h1>

            <div class="flex items-center gap-4 text-sm">
                <span class="text-gray-500">Admin</span>
                <div class="w-8 h-8 bg-gray-300 rounded-full"></div>
            </div>

        </header>

        <!-- Main -->
        <main class="flex-1 overflow-y-auto">
            <div class="p-8">
                @yield('content')
            </div>
        </main>

    </div>

</div>

</body>
</html>