<nav class="py-4 px-8 md:px-48">

    <div class="flex items-center justify-between">

        <!-- Logo -->
        <a href="{{ route('inicio') }}" class="font-bold text-xl animate-fade-up">
        
        </a>

        <!-- Desktop menu -->
        <ul class="hidden md:flex items-center gap-12">
            <li><a href="{{ route('inicio') }}" class="font-semibold">Inicio</a></li>
            <li><a href="/inicio#soluciones" class="font-semibold">Soluciones</a></li>
            <li><a href="/todas-propiedades" class="font-semibold">Propiedades</a></li>
            <li><a href="/quienes-somos" class="font-semibold">Quiénes somos</a></li>
        </ul>

        <!-- Hamburger -->
        <button id="menu-btn" class="md:hidden text-2xl text-[#ffffff]">
            ☰
        </button>

    </div>

    <!-- Mobile menu -->
    <div id="mobile-menu" class="hidden md:hidden mt-8 flex flex-col justify-between gap-4 pb-8">

        <ul class="flex flex-col text-end gap-4">
            <li><a href="{{ route('inicio') }}" class="font-semibold">Inicio</a></li>
            <li><a href="/inicio#soluciones" class="font-semibold">Soluciones</a></li>
            <li><a href="/todas-propiedades" class="font-semibold">Propiedades</a></li>
            <li><a href="/quienes-somos" class="font-semibold">Quiénes somos</a></li>
        </ul>

        

        <div class="flex items-end justify-end gap-3">

            {{-- Instagram --}}
            <a href="#" target="_blank"
                class="w-9 h-9 rounded-xl bg-[#ffffff] flex items-center justify-center text-[#3E153D] hover:bg-[#3E153D] hover:text-white transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
                </svg>
            </a>

            {{-- TikTok --}}
            <a href="#" target="_blank"
                class="w-9 h-9 rounded-xl bg-[#ffffff] flex items-center justify-center text-[#3E153D] hover:bg-[#3E153D] hover:text-white transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-2.88 2.5 2.89 2.89 0 01-2.89-2.89 2.89 2.89 0 012.89-2.89c.28 0 .54.04.79.1V9.01a6.33 6.33 0 00-.79-.05 6.34 6.34 0 00-6.34 6.34 6.34 6.34 0 006.34 6.34 6.34 6.34 0 006.33-6.34V8.69a8.18 8.18 0 004.78 1.52V6.75a4.85 4.85 0 01-1.01-.06z" />
                </svg>
            </a>

            {{-- Email --}}
            <a href="mailto:apinmobliariatandil@gmail.com"
                class="w-9 h-9 rounded-xl bg-[#ffffff] flex items-center justify-center text-[#3E153D] hover:bg-[#3E153D] hover:text-white transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
            </a>
        </div>

</nav>

<script>
    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('mobile-menu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>
