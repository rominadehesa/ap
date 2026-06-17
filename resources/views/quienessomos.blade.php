<!DOCTYPE html>
<html lang="en">

@include('frames.head', ['title' => 'Inicio'])

<body>
    <header class="relative w-full h-50 md:h-screen overflow-hidden">

        {{-- VIDEO DE FONDO --}}
        <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover z-0">
            <source src="{{ asset('images/header.mp4') }}" type="video/mp4">
        </video>

        {{-- OVERLAY OPCIONAL (oscurece el video para que se lea mejor el contenido) --}}
        <div class="absolute inset-0 bg-black/20 z-10"></div>

        {{-- NAV --}}
        <div class="relative z-20">
            @include('frames.nav')
        </div>

        {{-- LOGO --}}
        <main class="relative z-20 flex justify-start items-end md:items-center h-full">
            <img src="{{ asset('images/logo/logo aps b  - copia.png') }}" alt="" class="w-[150px] md:w-[280px]">
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
                            <h3 class="text-3xl md:text-4xl md:text-6xl font-bold">+<span class="counter"
                                    data-target="15">0></span>
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
                            <h3 class="text-3xl md:text-4xl md:text-6xl font-bold">+<span class="counter"
                                    data-target="80">0></span>
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
                Quiénes somos detras de AP+S
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
                    <p class="text-xs font-semibold text-[#3E153D] mb-3">Martillera y Corredora Pública</p>
                    <hr class="border-[#f5f0f5] mb-3">
                    <p class="text-xs text-gray-400 leading-[1.2]">
                        Con más de 15 años de experiencia, acompaña a sus clientes en la tasación, compra, venta y
                        administración de inmuebles urbanos y rurales.Con más de 15 años de experiencia, acompaña a sus
                        clientes en la tasación, compra, venta y administración de inmuebles urbanos y rurales.
                        Actualmente gestiona más de 100 administraciones, brindando un servicio basado en la confianza,
                        la responsabilidad y la atención personalizada.
                        <br>
                        Forma parte del Consejo Directivo del Colegio de Martilleros de la ciudad de Azul, participando
                        activamente en el fortalecimiento y desarrollo de la actividad profesional.
                        <br>
                        Trabaja con compromiso, experiencia y cercanía, ofreciendo un asesoramiento profesional y
                        acompañando a cada cliente en cada operación inmobiliaria, con la seriedad y dedicación que cada
                        proyecto merece.
                    </p>
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
                    <p class="text-xs font-semibold text-[#3E153D] mb-3">Martillera, Tasadora y Corredora Pública</p>
                    <hr class="border-[#f5f0f5] mb-3">
                    <p class="text-xs text-gray-400 leading-[1.2]">
                        Con más de 20 años de trayectoria en una compañía de seguros, desarrolló una amplia experiencia
                        en el asesoramiento y la atención personalizada de clientes. Martillera, tasadora y corredora
                        pública matriculada, cuenta con la formación necesaria para abordar cada operación con criterio
                        profesional y conocimiento del mercado. <br>

                        Desde hace más de cinco años se dedica al rubro inmobiliario, acompañando a cada cliente con
                        compromiso, profesionalismo y cercanía en una de las decisiones más importantes de su vida. Es
                        socia activa, desde hace dos años, de la Cámara Argentina de Inmobiliarias Rurales, y su enfoque
                        está puesto en construir vínculos de confianza duraderos, con un servicio transparente y
                        personalizado.
                    </p>
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
                    <p class="text-xs font-semibold text-[#3E153D] mb-3">Martillera y Corredora Pública</p>
                    <hr class="border-[#f5f0f5] mb-3">
                    <p class="text-xs text-gray-400 leading-[1.2]">
                        Con más de 30 años de experiencia en gestión y administración de negocios, su trayectoria abarca
                        atención al cliente, relación con proveedores, administración financiera y coordinación
                        operativa, desarrollando habilidades de organización, negociación y resolución de problemas.
                        Hoy aplica todo ese recorrido al ámbito inmobiliario, acompañando a compradores y vendedores en
                        una de las decisiones más importantes de sus vidas. <br> Su objetivo es brindar un servicio
                        cercano, transparente y profesional, entendiendo que detrás de cada operación hay expectativas,
                        proyectos y sueños que merecen ser atendidos con dedicación y compromiso.
                    </p>
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

            {{-- Rauch --}}
            <div
                class="bg-white border border-[#ECE7EC] p-12 flex flex-col items-center text-center hover:bg-[#3E153D] transition-all duration-300 group">

                <!-- Icono -->

                <h2 class="text-xl md:text-3xl font-bold text-[#2F2F2F] group-hover:text-white mb-6 transition">
                    Rauch
                </h2>

                <div class="space-y-1">
                    <p class="text-[#3E153D] font-semibold group-hover:text-white transition">
                        Oficina Alaguibe Inmobiliaria
                    </p>
                    <p class="text-sm text-gray-500 group-hover:text-white/70 transition">
                        Rondeau 956, Rauch
                    </p>

                    <p class="text-[#3E153D] font-semibold group-hover:text-white transition mt-4">
                        Oficina Petreigne Inmobiliaria
                    </p>
                    <p class="text-sm text-gray-500 group-hover:text-white/70 transition">
                        Moreno 561, Rauch
                    </p>
                </div>

                <p class="mt-6 text-sm text-gray-500 group-hover:text-white/70 leading-relaxed transition">
                    Compra, venta y alquiler de propiedades.
                </p>
            </div>

            {{-- Tandil --}}
            <div
                class="bg-[#FAFAFA] border border-[#ECE7EC] p-12 flex flex-col items-center text-center hover:bg-[#3E153D] transition-all duration-300 group">

                <!-- Icono -->

                <h2 class="text-xl md:text-3xl font-bold text-[#2F2F2F] group-hover:text-white mb-6 transition">
                    Tandil
                </h2>

                <p class="text-[#3E153D] font-semibold group-hover:text-white transition">
                    Oficina Comercial
                </p>

                <p class="text-sm text-gray-500 group-hover:text-white/70 transition">
                    Pinto 922, Tandil
                </p>

                <p class="mt-6 text-sm text-gray-500 group-hover:text-white/70 leading-relaxed transition">
                    Compra, venta y alquiler de propiedades.
                </p>
            </div>

            {{-- Buenos Aires --}}
            <div
                class="bg-white border border-[#ECE7EC] p-12 flex flex-col items-center text-center hover:bg-[#3E153D] transition-all duration-300 group">

                <!-- Icono -->

                <h2 class="text-xl md:text-3xl font-bold text-[#2F2F2F] group-hover:text-white mb-6 transition">
                    Buenos Aires
                </h2>

                <p class="text-[#3E153D] font-semibold group-hover:text-white transition">
                    Atención Online
                </p>

                <p class="text-sm text-gray-500 group-hover:text-white/70 mb-6 transition">
                    Contactanos desde cualquier lugar.
                </p>

                <a href="https://wa.me/5492494591111" target="_blank"
                    class="font-extabold text-[#3E153D] group-hover:text-white transition">
                    Escribinos por WhatsApp
                </a>
            </div>

        </div>

    </section>


    @include('frames.contactForm')

    @include('frames.footer')

</body>

</html>
