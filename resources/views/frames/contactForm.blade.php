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
                <a href="#" target="_blank"
                    class="w-9 h-9 rounded-xl bg-[#471c4620] flex items-center justify-center text-[#3E153D] hover:bg-[#3E153D] hover:text-white transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
                    </svg>
                </a>

                {{-- TikTok --}}
                <a href="#" target="_blank"
                    class="w-9 h-9 rounded-xl bg-[#471c4620] flex items-center justify-center text-[#3E153D] hover:bg-[#3E153D] hover:text-white transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-2.88 2.5 2.89 2.89 0 01-2.89-2.89 2.89 2.89 0 012.89-2.89c.28 0 .54.04.79.1V9.01a6.33 6.33 0 00-.79-.05 6.34 6.34 0 00-6.34 6.34 6.34 6.34 0 006.34 6.34 6.34 6.34 0 006.33-6.34V8.69a8.18 8.18 0 004.78 1.52V6.75a4.85 4.85 0 01-1.01-.06z" />
                    </svg>
                </a>

                {{-- Email --}}
                <a href="mailto:apinmobliariatandil@gmail.com"
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
</section>
