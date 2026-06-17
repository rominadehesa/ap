<section id="contacto" class="bg-[#fff6d8]">
    <div class="flex flex-col gap-10 md:flex-row md:justify-between md:items-start md:gap-20">
        <div class="w-full md:w-[40%]">
            <div class="flex justify-start  mb-8 md:mb-10">
                <span class="inline-block text-[16px] tracking-[0.10em] uppercase text-[#F2BF14] font-semibold">
                    Comunicate con nuestro equipo
                </span>
            </div>
            <h1 class="text-start text-4xl md:text-5xl mb-8">Contanos qué necesitás y cómo podemos ayudarte</h1>
            <p class="leading-[1.7]">Completá el formulario y nuestro equipo se pondrá en contacto a la brevedad para
                brindarte asesoramiento claro, cercano y sin compromiso, acompañándote en cada paso del proceso.</p>

            <br>
            <div class="flex items-center gap-3">

                {{-- Instagram --}}
                <a href="https://www.instagram.com/apinmobiliariatandil/" target="_blank"
                    class="w-9 h-9 rounded-xl bg-[#471c4620] flex items-center justify-center text-[#3E153D] hover:bg-[#3E153D] hover:text-white transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
                    </svg>
                </a>

                
               <a href="https://www.facebook.com/apinmobiliariatandil" target="_blank"
                    class="w-9 h-9 rounded-xl bg-[#471c4620] flex items-center justify-center text-[#3E153D] hover:bg-[#3E153D] hover:text-white transition-colors">

                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-5 h-5"
                        fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M22 12.07C22 6.48 17.52 2 12 2S2 6.48 2 12.07c0 5.04 3.66 9.22 8.44 10V15H7.9v-2.93h2.54V9.84c0-2.52 1.49-3.91 3.78-3.91 1.1 0 2.25.2 2.25.2v2.48H15.2c-1.25 0-1.64.78-1.64 1.58v1.88h2.79l-.45 2.93h-2.34v7.07C18.34 21.29 22 17.11 22 12.07z" />
                    </svg>

                </a>

                {{-- Email --}}
                <a href="mailto:apinmobiliariatandil@gmail.com"
                    class="w-9 h-9 rounded-xl bg-[#471c4620] flex items-center justify-center text-[#3E153D] hover:bg-[#3E153D] hover:text-white transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </a>

            </div>
        </div>

        <form class="w-full md:w-[50%] bg-white shadow-sm px-8 py-10 shadow rounded-2xl flex flex-col gap-4">
            <div class="flex flex-col gap-4 md:flex-row">
                <div class="flex flex-col gap-1 w-full">
                    <label class="text-xs text-gray-500 font-medium">Nombre</label>
                    <input type="text" placeholder="Tu nombre"
                        class="border border-gray-200 rounded-lg px-4 py-2.5 text-sm text-gray-800 outline-none focus:border-[#3E153D] transition bg-gray-50" />
                </div>
                <div class="flex flex-col gap-1 w-full">
                    <label class="text-xs text-gray-500 font-medium">Teléfono</label>
                    <input type="tel" placeholder="+54 11 ..."
                        class="border border-gray-200 rounded-lg px-4 py-2.5 text-sm text-gray-800 outline-none focus:border-[#3E153D] transition bg-gray-50" />
                </div>
            </div>
            <div class="flex flex-col gap-1">
                <label class="text-xs text-gray-500 font-medium">Email</label>
                <input type="email" placeholder="tucorreo@email.com"
                    class="border border-gray-200 rounded-lg px-4 py-2.5 text-sm text-gray-800 outline-none focus:border-[#3E153D] transition bg-gray-50" />
            </div>
            <div class="flex flex-col gap-1">
                <label class="text-xs text-gray-500 font-medium">Mensaje</label>
                <textarea rows="4" placeholder="Contanos en qué podemos ayudarte..."
                    class="border border-gray-200 rounded-lg px-4 py-2.5 text-sm text-gray-800 outline-none focus:border-[#3E153D] transition bg-gray-50 resize-none"></textarea>
            </div>
            <button type="submit"
                class="w-full bg-[#3E153D] text-white py-3 rounded-lg text-sm font-semibold hover:bg-[#2c0f2b] transition mt-4">
                Enviar consulta
            </button>
            <span class="text-sm text-gray-500 text-center mt-2">
                Te respondemos a la brevedad. Y no te preocupes, tu información está segura con nosotros.
            </span>
        </form>

    </div>
    <div class="w-full mt-20">

        <div class="flex items-center justify-center">

            <div class="text-center mb-10">
                <h1 class="text-lg md:text-3xl mb-2">¿Preferís una atención más rápida?</h1>
                <p class="leading-[1.7]">Escribinos directamente por WhatsApp y te responderemos a la brevedad.</p>
            </div>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

            <!-- AP -->
            <a href="https://wa.me/5492494591111" target="_blank"
                class="flex items-center gap-3 p-4 bg-white rounded-xl hover:bg-[#25D36610] transition">
                <div class="w-10 h-10 rounded-xl bg-[#25D36620] flex items-center justify-center text-[#25D366]">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor"
                        class="w-5 h-5">
                        <path
                            d="M16.04 3C8.84 3 3 8.84 3 16.04c0 2.54.73 5.01 2.12 7.14L3 29l5.99-2.08a13 13 0 007.05 2.06C23.24 28.98 29 23.18 29 16.04 29 8.84 23.24 3 16.04 3zm0 23.7c-2.16 0-4.27-.58-6.12-1.69l-.44-.26-3.55 1.23 1.19-3.64-.29-.46a10.67 10.67 0 1119.88-5.84c0 5.89-4.79 10.66-10.67 10.66zm5.85-8.01c-.32-.16-1.9-.94-2.2-1.05-.29-.11-.5-.16-.71.16-.21.31-.81 1.05-.99 1.26-.18.21-.36.24-.68.08-.32-.16-1.34-.49-2.56-1.57-.95-.84-1.59-1.87-1.77-2.18-.18-.32-.02-.49.13-.65.14-.14.32-.36.48-.54.16-.18.21-.31.32-.52.11-.21.05-.39-.03-.55-.08-.16-.71-1.71-.98-2.34-.25-.6-.5-.52-.71-.53h-.61c-.21 0-.55.08-.84.39-.29.31-1.1 1.08-1.1 2.64s1.13 3.07 1.29 3.28c.16.21 2.21 3.37 5.35 4.72.75.32 1.34.51 1.8.65.76.24 1.46.2 2.01.12.61-.09 1.9-.78 2.17-1.53.27-.75.27-1.39.19-1.53-.08-.13-.29-.21-.61-.37z" />
                    </svg>
                </div>
                <div>
                    <p class="font-semibold text-[#3E153D]">AP Soluciones</p>
                    <p class="text-sm text-gray-600">+54 9 2494 591-111</p>
                </div>
            </a>

            <!-- Lucía -->
            <a href="https://wa.me/5492494361497" target="_blank"
                class="flex items-center gap-3 p-4 bg-white rounded-xl hover:bg-[#25D36610] transition">
                <div class="w-10 h-10 rounded-xl bg-[#25D36620] flex items-center justify-center text-[#25D366]">
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor"
                class="w-5 h-5">
                <path
                    d="M16.04 3C8.84 3 3 8.84 3 16.04c0 2.54.73 5.01 2.12 7.14L3 29l5.99-2.08a13 13 0 007.05 2.06C23.24 28.98 29 23.18 29 16.04 29 8.84 23.24 3 16.04 3zm0 23.7c-2.16 0-4.27-.58-6.12-1.69l-.44-.26-3.55 1.23 1.19-3.64-.29-.46a10.67 10.67 0 1119.88-5.84c0 5.89-4.79 10.66-10.67 10.66zm5.85-8.01c-.32-.16-1.9-.94-2.2-1.05-.29-.11-.5-.16-.71.16-.21.31-.81 1.05-.99 1.26-.18.21-.36.24-.68.08-.32-.16-1.34-.49-2.56-1.57-.95-.84-1.59-1.87-1.77-2.18-.18-.32-.02-.49.13-.65.14-.14.32-.36.48-.54.16-.18.21-.31.32-.52.11-.21.05-.39-.03-.55-.08-.16-.71-1.71-.98-2.34-.25-.6-.5-.52-.71-.53h-.61c-.21 0-.55.08-.84.39-.29.31-1.1 1.08-1.1 2.64s1.13 3.07 1.29 3.28c.16.21 2.21 3.37 5.35 4.72.75.32 1.34.51 1.8.65.76.24 1.46.2 2.01.12.61-.09 1.9-.78 2.17-1.53.27-.75.27-1.39.19-1.53-.08-.13-.29-.21-.61-.37z" />
            </svg>
                </div>
                <div>
                    <p class="font-semibold text-[#3E153D]">Lucía</p>
                    <p class="text-sm text-gray-600">+54 9 2494 361-497</p>
                </div>
            </a>

            <!-- Yanina -->
            <a href="https://wa.me/5492494356779" target="_blank"
                class="flex items-center gap-3 p-4 bg-white rounded-xl hover:bg-[#25D36610] transition">
                <div class="w-10 h-10 rounded-xl bg-[#25D36620] flex items-center justify-center text-[#25D366]">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor"
                class="w-5 h-5">
                <path
                    d="M16.04 3C8.84 3 3 8.84 3 16.04c0 2.54.73 5.01 2.12 7.14L3 29l5.99-2.08a13 13 0 007.05 2.06C23.24 28.98 29 23.18 29 16.04 29 8.84 23.24 3 16.04 3zm0 23.7c-2.16 0-4.27-.58-6.12-1.69l-.44-.26-3.55 1.23 1.19-3.64-.29-.46a10.67 10.67 0 1119.88-5.84c0 5.89-4.79 10.66-10.67 10.66zm5.85-8.01c-.32-.16-1.9-.94-2.2-1.05-.29-.11-.5-.16-.71.16-.21.31-.81 1.05-.99 1.26-.18.21-.36.24-.68.08-.32-.16-1.34-.49-2.56-1.57-.95-.84-1.59-1.87-1.77-2.18-.18-.32-.02-.49.13-.65.14-.14.32-.36.48-.54.16-.18.21-.31.32-.52.11-.21.05-.39-.03-.55-.08-.16-.71-1.71-.98-2.34-.25-.6-.5-.52-.71-.53h-.61c-.21 0-.55.08-.84.39-.29.31-1.1 1.08-1.1 2.64s1.13 3.07 1.29 3.28c.16.21 2.21 3.37 5.35 4.72.75.32 1.34.51 1.8.65.76.24 1.46.2 2.01.12.61-.09 1.9-.78 2.17-1.53.27-.75.27-1.39.19-1.53-.08-.13-.29-.21-.61-.37z" />
            </svg>
                </div>
                <div>
                    <p class="font-semibold text-[#3E153D]">Yanina</p>
                    <p class="text-sm text-gray-600">+54 9 2494 356-779</p>
                </div>
            </a>

            <!-- Fedra -->
            <a href="https://wa.me/5492494535251" target="_blank"
                class="flex items-center gap-3 p-4 bg-white rounded-xl hover:bg-[#25D36610] transition">
                <div class="w-10 h-10 rounded-xl bg-[#25D36620] flex items-center justify-center text-[#25D366]">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor"
                class="w-5 h-5">
                <path
                    d="M16.04 3C8.84 3 3 8.84 3 16.04c0 2.54.73 5.01 2.12 7.14L3 29l5.99-2.08a13 13 0 007.05 2.06C23.24 28.98 29 23.18 29 16.04 29 8.84 23.24 3 16.04 3zm0 23.7c-2.16 0-4.27-.58-6.12-1.69l-.44-.26-3.55 1.23 1.19-3.64-.29-.46a10.67 10.67 0 1119.88-5.84c0 5.89-4.79 10.66-10.67 10.66zm5.85-8.01c-.32-.16-1.9-.94-2.2-1.05-.29-.11-.5-.16-.71.16-.21.31-.81 1.05-.99 1.26-.18.21-.36.24-.68.08-.32-.16-1.34-.49-2.56-1.57-.95-.84-1.59-1.87-1.77-2.18-.18-.32-.02-.49.13-.65.14-.14.32-.36.48-.54.16-.18.21-.31.32-.52.11-.21.05-.39-.03-.55-.08-.16-.71-1.71-.98-2.34-.25-.6-.5-.52-.71-.53h-.61c-.21 0-.55.08-.84.39-.29.31-1.1 1.08-1.1 2.64s1.13 3.07 1.29 3.28c.16.21 2.21 3.37 5.35 4.72.75.32 1.34.51 1.8.65.76.24 1.46.2 2.01.12.61-.09 1.9-.78 2.17-1.53.27-.75.27-1.39.19-1.53-.08-.13-.29-.21-.61-.37z" />
            </svg>
                </div>
                <div>
                    <p class="font-semibold text-[#3E153D]">Fedra</p>
                    <p class="text-sm text-gray-600">+54 9 2494 53-5251</p>
                </div>
            </a>

        </div>

    </div>
</section>
