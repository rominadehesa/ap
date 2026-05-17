<nav class="py-4">

    <div class="flex items-center justify-between">

        <!-- Logo -->
        <a href="{{ route('inicio') }}" class="font-bold text-xl">
            <img src="{{ asset('images/logo/logo aps b .png') }}" alt="" srcset="" class="w-[50px]">
        </a>

        <!-- Desktop menu -->
        <ul class="hidden md:flex items-center gap-12">

            <li><a href="{{ route('inicio') }}" class="font-semibold">Inicio</a></li>
            <li><a href="/inicio#soluciones" class="font-semibold">Soluciones</a></li>
            <li><a href="/todas-propiedades" class="font-semibold">Propiedades</a></li>
            <li><a href="/quienes-somos" class="font-semibold">Quiénes somos</a></li>

            <li>
                <button id="btn-primary">
                    Hablemos
                </button>
            </li>

        </ul>

        <!-- Hamburger -->
        <button id="menu-btn" class="md:hidden text-3xl">
            ☰
        </button>

    </div>

    <!-- Mobile menu -->
    <div id="mobile-menu" class="hidden md:hidden mt-6">

        <ul class="flex flex-col gap-6">

            <li><a href="{{ route('inicio') }}" class="font-semibold">Inicio</a></li>
            <li><a href="/inicio#soluciones" class="font-semibold">Soluciones</a></li>
            <li><a href="/inicio#explorar" class="font-semibold">Explorar</a></li>
            <li><a href="/todas-propiedades" class="font-semibold">Propiedades</a></li>
            <li><a href="/inicio#quiénessomos" class="font-semibold">Quiénes somos</a></li>

            <li>
                <button id="btn-primary">
                    Hablemos
                </button>
            </li>

        </ul>

    </div>

</nav>

<script>
    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('mobile-menu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>