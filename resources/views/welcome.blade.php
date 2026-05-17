<!DOCTYPE html>
<html lang="en">

@include('frames.head', ['title' => 'Inicio'])

<body>
    <header class="bg-[#0D0D0D]">

        @include('frames.nav')

        <main class="">
            <div class="animate-fade-up">
                <h1 class="text-5xl md:text-6xl text-start md:text-center text-[#fff] leading-tight mb-4">
                    Soluciones inmobiliarias
                </h1>
            </div>

        </main>

    </header>

    <section id="soluciones" class="">

        <!-- HEADER -->
        <div class="text-left text-center md:px-0">

            <div class="flex justify-start md:justify-center mb-8 md:mb-10">
                <span class="inline-block text-[11px] tracking-[0.25em] uppercase text-[#F2BF14] font-semibold">
                    Conocé nuestras soluciones
                </span>
            </div>

            <h1 class="text-3xl md:text-5xl text-start md:text-center text-[#fff] leading-tight mb-4">
                Llegaste a un lugar donde tu propiedad<br class="none md:block"> <strong
                    class="text-[#F2BF14] md:opacity-0 md:animate-[fadeDown_2s_ease-out_forwards]">
                    está en buenas manos</strong>
            </h1>

            <div class="flex md:justify-center">
                <p class="w-full md:w-[50%] text-white/50 leading-[1.7] text-start md:text-center ">
                    Acompañamos a nuestros clientes con soluciones claras,
                    responsables y personalizadas en cada operación.
                </p>
            </div>

        </div>

        <!-- CARDS -->
        <div class="flex flex-col md:flex-row mt-10 md:mt-16">

            <!-- CARD 1 -->
            <div
                class="w-full border-b md:border-b-0 md:border-r border-white/30 p-6  pl-1 md:p-8 hover:bg-[#3E153D] hover:border-[#F2BF14] hover:rounded-lg transition-all duration-300">

                <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect width="41" height="41" rx="8" fill="#F2BF14" fill-opacity="0.101961" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M25.6923 25.8638C26.0465 25.5516 26.2692 25.0987 26.2692 24.5947V19.4607C26.2693 19.1999 26.2085 18.9426 26.0914 18.7086C25.9744 18.4746 25.8043 18.2702 25.5942 18.1111L21.5558 15.0554C21.2531 14.8262 20.8819 14.702 20.5 14.702C20.1181 14.702 19.7469 14.8262 19.4442 15.0554L15.4058 18.1111C15.1955 18.2703 15.0253 18.4749 14.9083 18.7091C14.7913 18.9433 14.7305 19.2009 14.7308 19.4618V24.5947C14.7302 24.8178 14.7742 25.0388 14.8605 25.2452C14.9468 25.4515 15.0735 25.6391 15.2335 25.7972C15.3935 25.9553 15.5836 26.0809 15.7929 26.1667C16.0022 26.2525 16.2267 26.2969 16.4535 26.2974H17.0385V22.3245C17.0385 21.7225 17.2816 21.145 17.7144 20.7193C18.1471 20.2935 18.7341 20.0544 19.3462 20.0544H21.6538C22.2659 20.0544 22.8529 20.2935 23.2856 20.7193C23.7184 21.145 23.9615 21.7225 23.9615 22.3245V26.2974H24.5465C24.9862 26.2951 25.3888 26.1316 25.6923 25.8638ZM28 24.5947C28 25.4979 27.6353 26.364 26.9861 27.0026C26.337 27.6412 25.4565 28 24.5385 28H16.4615C15.5435 28 14.663 27.6412 14.0139 27.0026C13.3647 26.364 13 25.4979 13 24.5947V19.4607C13 18.9393 13.1218 18.4249 13.3558 17.9571C13.5899 17.4893 13.93 17.0806 14.35 16.7626L18.3885 13.7069C18.9937 13.2486 19.7361 13 20.5 13C21.2639 13 22.0063 13.2486 22.6115 13.7069L26.65 16.7626C27.0701 17.0808 27.4104 17.4896 27.6444 17.9576C27.8785 18.4256 28.0001 18.9403 28 19.4618V24.5947ZM22.2308 22.3245C22.2308 22.174 22.17 22.0297 22.0618 21.9232C21.9536 21.8168 21.8069 21.757 21.6538 21.757H19.3462C19.1931 21.757 19.0464 21.8168 18.9382 21.9232C18.83 22.0297 18.7692 22.174 18.7692 22.3245V26.2974H22.2308V22.3245Z"
                        fill="#F2BF14" />
                </svg>

                <div class="mt-6 md:mt-8">
                    <div>
                        <p class="text-white font-bold mb-3 md:mb-4 text-lg">
                            Venta de propiedades
                        </p>

                        <p class="text-white/50 leading-[1.7]">
                            Diseñamos un plan de marketing con publicidad dirigida,
                            fotografía y video para lograr mayor visibilidad y encontrar
                            al comprador adecuado.
                        </p>
                    </div>

                    <div class="mt-4 md:mt-2">
                        <a href="#contacto" class="text-white text-sm bg-transparent border-white border-b">
                            Consultar →
                        </a>
                    </div>
                </div>
            </div>

            <!-- CARD 2 -->
            <div
                class="w-full border-b md:border-b-0 md:border-r border-white/30 p-6  pl-1 md:p-8 hover:bg-[#3E153D] hover:border-[#F2BF14] hover:rounded-lg transition-all duration-300">

                <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_18_12)">
                        <path
                            d="M26.0001 25.9999L23.1048 23.1046M23.1048 23.1046C23.6001 22.6093 23.9929 22.0213 24.261 21.3743C24.529 20.7272 24.6669 20.0336 24.6669 19.3332C24.6669 18.6328 24.529 17.9393 24.261 17.2922C23.9929 16.6451 23.6001 16.0572 23.1048 15.5619C22.6095 15.0666 22.0216 14.6738 21.3745 14.4057C20.7274 14.1377 20.0339 13.9998 19.3335 13.9998C18.6331 13.9998 17.9395 14.1377 17.2924 14.4057C16.6454 14.6738 16.0574 15.0666 15.5621 15.5619C14.5619 16.5621 14 17.9187 14 19.3332C14 20.7478 14.5619 22.1043 15.5621 23.1046C16.5624 24.1048 17.9189 24.6667 19.3335 24.6667C20.748 24.6667 22.1046 24.1048 23.1048 23.1046Z"
                            stroke="#F2BF14" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                    </g>

                    <rect width="41" height="41" rx="8" fill="#F2BF14" fill-opacity="0.101961" />

                    <defs>
                        <clipPath id="clip0_18_12">
                            <rect width="16" height="16" fill="white" transform="translate(12 12)" />
                        </clipPath>
                    </defs>
                </svg>

                <div class="mt-6 md:mt-8">
                    <div>
                        <p class="text-white font-bold mb-3 md:mb-4 text-lg">
                            Tasaciones
                        </p>

                        <p class="text-white/50 leading-[1.7]">
                            Realizamos tasaciones con análisis del mercado y un informe detallado
                            para determinar el valor adecuado de cada propiedad.
                        </p>
                    </div>

                    <div class="mt-4 md:mt-2">
                        <a href="#contacto" class="text-white text-sm bg-transparent border-white border-b">
                            Consultar →
                        </a>
                    </div>
                </div>
            </div>

            <!-- CARD 3 -->
            <div
                class="w-full p-6 pl-1 md:p-8 hover:border-r hover:bg-[#3E153D] hover:border-[#F2BF14] hover:rounded-lg transition-all duration-300">

                <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect width="41" height="41" rx="8" fill="#F2BF14" fill-opacity="0.101961" />
                    <path
                        d="M18.4751 21.525H23.1251M18.4751 24.625H20.8001M14.6001 14.55V26.95C14.6001 27.3611 14.7634 27.7553 15.0541 28.046C15.3448 28.3367 15.739 28.5 16.1501 28.5H25.4501C25.8612 28.5 26.2554 28.3367 26.5461 28.046C26.8368 27.7553 27.0001 27.3611 27.0001 26.95V17.915C27.0001 17.7086 26.9588 17.5042 26.8787 17.3138C26.7986 17.1235 26.6812 16.9511 26.5335 16.8068L23.0925 13.4417C22.803 13.1586 22.4141 13.0001 22.0091 13H16.1501C15.739 13 15.3448 13.1633 15.0541 13.454C14.7634 13.7447 14.6001 14.1389 14.6001 14.55Z"
                        stroke="#F2BF14" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M22.3501 13V16.1C22.3501 16.5111 22.5134 16.9053 22.8041 17.196C23.0948 17.4867 23.489 17.65 23.9001 17.65H27.0001"
                        stroke="#F2BF14" stroke-width="1.5" stroke-linejoin="round" />
                </svg>

                <div class="mt-6 md:mt-8">
                    <div>

                        <p class="text-white font-bold mb-3 md:mb-4 text-lg">
                            Asesoramiento legal
                        </p>

                        <p class="text-white/50 leading-[1.7]">
                            Revisión de contratos y documentación para proteger tus intereses
                            en cada transacción.
                        </p>
                    </div>

                    <div class="mt-4 md:mt-2">
                        <a href="#contacto" class="text-white text-sm bg-transparent border-white border-b">
                            Consultar →
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="explorar" class="bg-[#f7eef9]">
        <div class="flex justify-start md:justify-start">
            <span class="text-center text-md mb-10 span-tag">Explorar</span>
        </div>
        <div class="md:flex md:justify-between md:gap-20">
            <div class="w-full md:w-[40%]">
                <h1 class="text-4xl md:text-5xl text-start mb-8">Encontrá la propiedad que estas buscando</h1>
                <div class="leading-[1.7] text-start">
                    <p>Seleccionamos las mejores oportunidades del mercado. Desde casas y departamentos hasta lotes,
                        tenemos opciones para cada necesidad y presupuesto.</p>
                    <br>
                    <a href="{{ route('todas-propiedades') }}"
                        class="text-[#3E153D] border-b border-[#3E153D] text-md font-extrabold transition">
                        Ver todas las propiedades →
                    </a>
                </div>
            </div>
            <div class="w-full md:w-[50%] overflow-hidden mt-10 md:mt-0">
                <div class="flex gap-2 overflow-x-auto snap-x snap-mandatory pb-2">
                    @foreach ($propiedades as $item)
                        <article class="bg-white w-80 rounded-lg shadow p-1 shrink-0">
                            <div class="w-full h-[150px] bg-[#f1f1f1]">
                                <img src="{{ asset('storage/' . $item->imagen_portada_url) }}"
                                    class="w-full h-full object-cover">
                            </div>
                            <div class="px-6 py-8">
                                <p class="font-semibold text-sm text-gray-600 leading-[1.2] mb-2">{{ $item->slogan }}
                                </p>
                                <p class="leading-[1.2] w-[90%] font-bold text-gray-800 text-lg mb-2">
                                    {{ $item->titulo }}</p>
                                <div class="text-sm text-gray-500">
                                    {{ $item->direccion }}, {{ $item->ciudad }} - {{ $item->zona }} <br>
                                    {{ $item->ambientes }} ambientes - {{ $item->superficie_cubierta }} m²
                                </div>
                                <!-- FOOTER -->
                                <div class="flex items-center justify-between mt-5 pt-4 border-t border-gray-100">

                                    <!-- FEATURES -->
                                    <div class="flex flex-wrap gap-2">

                                        @if ($item->tiene_pileta)
                                            <span
                                                class="text-[11px] bg-blue-50 text-blue-700 px-2.5 py-1 rounded-full">
                                                Pileta
                                            </span>
                                        @endif

                                        @if ($item->tiene_cochera)
                                            <span
                                                class="text-[11px] bg-gray-100 text-gray-700 px-2.5 py-1 rounded-full">
                                                Cochera
                                            </span>
                                        @endif

                                        @if ($item->tiene_parrilla)
                                            <span
                                                class="text-[11px] bg-orange-50 text-orange-700 px-2.5 py-1 rounded-full">
                                                Parrilla
                                            </span>
                                        @endif

                                    </div>

                                    <!-- BOTON -->
                                    <a href="{{ route('ver-propiedad', $item->id) }}"
                                        class="inline-flex items-center gap-1 text-sm font-semibold text-[#1a0a19] hover:text-[#4b1d49] transition">

                                        Ver más

                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">

                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7" />

                                        </svg>

                                    </a>

                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section id="quiénessomos" class="p-0 m-0">
        <div class="md:flex md:justify-between">
            <div class="w-full md:w-[35vw] contenedor pr-0">
                <div class="flex justify-start mb-8">
                    <span class="text-center text-md span-tag">Detrás de APS</span>
                </div>
                <h1 class="text-start text-4xl md:text-5xl md:text-5xl mb-8">Comprometidas con cada operación</h1>
                <div>
                    <p class="leading-[1.7]">Nos enfocamos en ofrecer un asesoramiento claro, responsable y
                        cercano, entendiendo las
                        necesidades
                        de cada cliente y trabajando para lograr operaciones seguras, eficientes y satisfactorias para
                        todas
                        las partes.</p>
                    <br>
                    <a href="{{ route('todas-propiedades') }}"
                        class="text-[#3E153D] border-b border-[#3E153D] text-md font-extrabold transition">
                        Ver mas sobre APS →
                    </a>
                </div>
            </div>
            <div class="w-full md:w-[50vw]">
                <img src="{{ asset('images/WhatsApp Image 2026-05-12 at 1.39.15 PM.jpeg') }}" alt=""
                    srcset="">
            </div>
        </div>
    </section>

    @include('frames.contactForm')

    @include('frames.footer')

</body>

</html>
