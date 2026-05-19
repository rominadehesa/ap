<!DOCTYPE html>
<html lang="en">

@include('frames.head', ['title' => 'Inicio'])

<body>
    <header>
        @include('frames.nav')
        <main>

        </main>
    </header>


    <section id="quiénessomos">
        <div class="md:flex md:justify-between">
            <div class="w-full md:w-[30vw]">
                <div class="flex justify-start  mb-8 md:mb-10">
                    <span class="inline-block text-[16px] tracking-[0.10em] uppercase text-[#F2BF14] font-semibold">
                       Quiénes somos
                    </span>
                </div>
                <h1 class="text-start text-4xl md:text-5xl">Más que una inmobiliaria,</h1>
                <h1 class="text-start text-4xl md:text-5xl mb-8 text-[#471C46]">
                    un equipo que te acompaña.</h1>
                <div>
                    <p class="leading-[1.7] md:w-[80%]">Cada cliente tiene una necesidad distinta. Sabemos escucharla,
                        entenderla y acompañarla — con el compromiso y la seriedad que una decisión importante merece.
                    </p>
                    <br>
                </div>
            </div>
            <div class="w-full md:w-[30vw] flex flex-col justify-center">
                <div>
                    <article
                        class="flex items-center gap-6 reveal opacity-0 translate-y-2 transition duration-1200 ease-out"
                        id="valores">
                        <div class="w-full">
                            <h3 class="text-3xl md:text-4xl md:text-6xl font-bold">+<span class="counter" data-target="10">0></span>
                            </h3>
                        </div>
                        <div>
                            <p class="text-md text-end">años de <br> experiencia</p>
                        </div>
                    </article>
                    <article
                        class="flex items-center gap-6 reveal opacity-0 translate-y-2 transition duration-1200 ease-out"
                        id="valores">
                        <div class="w-full">
                            <h3 class="text-3xl md:text-4xl md:text-6xl font-bold">+<span class="counter" data-target="80">0></span>
                            </h3>
                        </div>
                        <div>
                            <p class="text-md text-end">operaciones <br> realizadas</p>
                        </div>
                    </article>
                    <article
                        class="flex items-center gap-6 reveal opacity-0 translate-y-2 transition duration-3000 ease-out"
                        id="valores">
                        <div class="w-full">
                            <h3 class="text-3xl md:text-4xl md:text-6xl font-bold"><span class="counter"
                                    data-target="100">0></span>%</h3>
                        </div>
                        <div>
                            <p class="text-md text-end">acompañamiento <br> personalizado</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#f7eef9]">
        <div class="text-center mb-14">
            <div class="flex justify-center  mb-8 md:mb-10">
                    <span class="inline-block text-[16px] tracking-[0.10em] uppercase text-[#F2BF14] font-semibold">
                        Nuestro equipo
                    </span>
                </div>

            <h1 class="text-3xl md:text-5xl font-bold text-[#2F2F2F]">
               Quiénes somos detras de APS
            </h1>
        </div>
        <div class="md:flex gap-4">
            {{-- Yanina --}}
            <div
                class="flex-1 bg-white rounded-2xl overflow-hidden border border-[#f0eaf0] hover:border-[#3E153D] transition-colors group md:mb-0 mb-6">
                <div class="h-52 bg-[#471c4620] overflow-hidden">
                    <img src="{{ asset('images/yanina.jpeg') }}" alt="Yanina Alaguibe"
                        class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-5">
                    <p class="text-[10px] font-bold tracking-widest uppercase text-[#F2BF14] mb-1">Socia fundadora</p>
                    <p class="text-lg font-extrabold text-[#2F2F2F] mb-1">Yanina Alaguibe</p>
                    <p class="text-xs font-semibold text-[#3E153D] mb-3">Martillera y Corredora Inmobiliaria</p>
                    <hr class="border-[#f5f0f5] mb-3">
                    <p class="text-xs text-gray-400 leading-relaxed">Con más de 15 años de trayectoria, acompaña cada
                        operación con el criterio y la seriedad que una decisión importante merece.</p>
                </div>
            </div>

            {{-- Lucia --}}
            <div
                class="flex-1 bg-white rounded-2xl overflow-hidden border border-[#f0eaf0] hover:border-[#3E153D] transition-colors group md:mb-0 mb-6">
                <div class="h-52 bg-[#471c4620] overflow-hidden">
                    <img src="{{ asset('images/lucia.jpeg') }}" alt="Lucia Petreigne"
                        class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-5">
                    <p class="text-[10px] font-bold tracking-widest uppercase text-[#F2BF14] mb-1">Socia fundadora</p>
                    <p class="text-lg font-extrabold text-[#2F2F2F] mb-1">Lucia Petreigne</p>
                    <p class="text-xs font-semibold text-[#3E153D] mb-3">Martillera y Corredora Inmobiliaria</p>
                    <hr class="border-[#f5f0f5] mb-3">
                    <p class="text-xs text-gray-400 leading-relaxed">Especialista en asesoramiento personalizado y
                        cierre de operaciones, acompañando cada proceso con dedicación y atención al detalle.</p>
                </div>
            </div>

            {{-- Tercera socia --}}
            <div
                class="flex-1 bg-white rounded-2xl overflow-hidden border border-[#f0eaf0] hover:border-[#3E153D] transition-colors group md:mb-0 mb-6">
                <div class="h-52 bg-[#471c4620] overflow-hidden">
                    <img src="{{ asset('images/fedra.jpeg') }}" alt="Fedra Sandoval"
                        class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-5">
                    <p class="text-[10px] font-bold tracking-widest uppercase text-[#F2BF14] mb-1">Socia</p>
                    <p class="text-lg font-extrabold text-[#2F2F2F] mb-1">Fedra Sandoval</p>
                    <p class="text-xs font-semibold text-[#3E153D] mb-3">Asesora Inmobiliaria</p>
                    <hr class="border-[#f5f0f5] mb-3">
                    <p class="text-xs text-gray-400 leading-relaxed">Forma parte del equipo con vocación de servicio y compromiso genuino con cada cliente. Acompaña cada consulta con dedicación y claridad.</p>
                </div>
            </div>

        </div>
    </section>

    <section class="bg-[#F8F8F8] py-20">

    <div class="text-center mb-14">
         <div class="flex justify-center  mb-8 md:mb-10">
                    <span class="inline-block text-[16px] tracking-[0.10em] uppercase text-[#F2BF14] font-semibold">
                        Sucursales
                    </span>
                </div>


        <h1 class="text-3xl md:text-5xl font-bold text-[#2F2F2F]">
            Nuestras oficinas
        </h1>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3">

        {{-- Oficina 1 --}}
        <div
            class="bg-white border border-[#ECE7EC] p-12 flex flex-col items-center text-center hover:bg-[#3E153D] transition-all duration-300 group">

            <div
                class="w-10 h-10 md:w-20 md:h-20 rounded-full bg-[#F8F3F8] flex items-center justify-center mb-6 group-hover:bg-white/10 transition">

                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-8 h-8 text-[#3E153D] group-hover:text-white transition"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 21h18M5 21V7l7-4 7 4v14M9 9h.01M9 13h.01M9 17h.01M15 9h.01M15 13h.01M15 17h.01" />
                </svg>
            </div>

            <h2 class="text-md md:text-2xl font-bold text-[#2F2F2F] group-hover:text-white mb-2 transition">
                Rauch
            </h2>

            <p class="text-sm text-gray-500 group-hover:text-white/70 leading-relaxed transition">
                Atención personalizada para compra, venta y alquiler de propiedades. A cargo de Yanina Alaguibe.
            </p>
        </div>

        {{-- Oficina 2 --}}
        <div
            class="bg-[#FAFAFA] border border-[#ECE7EC] p-12 flex flex-col items-center text-center hover:bg-[#3E153D] transition-all duration-300 group">

            <div
                class="w-10 h-10 md:w-20 md:h-20 rounded-full bg-[#F8F3F8] flex items-center justify-center mb-6 group-hover:bg-white/10 transition">

                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-8 h-8 text-[#3E153D] group-hover:text-white transition"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 21h18M5 21V7l7-4 7 4v14M9 9h.01M9 13h.01M9 17h.01M15 9h.01M15 13h.01M15 17h.01" />
                </svg>
            </div>

            <h2 class="text-md md:text-2xl font-bold text-[#2F2F2F] group-hover:text-white mb-2 transition">
                Tandil
            </h2>

            <p class="text-sm text-gray-500 group-hover:text-white/70 leading-relaxed transition">
                Atención personalizada para compra, venta y alquiler de propiedades.
            </p>
        </div>

        {{-- Oficina 3 --}}
        <div
            class="bg-white border border-[#ECE7EC] p-12 flex flex-col items-center text-center hover:bg-[#3E153D] transition-all duration-300 group">

            <div
                class="w-10 h-10 md:w-20 md:h-20 rounded-full bg-[#F8F3F8] flex items-center justify-center mb-6 group-hover:bg-white/10 transition">

                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-8 h-8 text-[#3E153D] group-hover:text-white transition"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 21h18M5 21V7l7-4 7 4v14M9 9h.01M9 13h.01M9 17h.01M15 9h.01M15 13h.01M15 17h.01" />
                </svg>
            </div>

            <h2 class="text-md md:text-2xl font-bold text-[#2F2F2F] group-hover:text-white mb-2 transition">
                Buenos Aires
            </h2>

            <p class="text-sm text-gray-500 group-hover:text-white/70 leading-relaxed transition">
                Atención personalizada para compra, venta y alquiler de propiedades. Con cita previa. A cargo de Fedra Sandoval.
            </p>
        </div>

    </div>

</section>

    
    @include('frames.contactForm')

    @include('frames.footer')

</body>

</html>
