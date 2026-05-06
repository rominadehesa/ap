<section id="contacto">
    <div class="flex justify-start">
        <span class="text-center text-md mb-10 span-tag">Contacto</span>
    </div>
    <div class="flex justify-between items-start gap-20">

        <div class="w-[40%]">
            <h1 class="text-5xl text-start mb-6">Contanos qué necesitás.</h1>
            <p class="leading-[1.7] mb-8">Completá el formulario y nos ponemos en contacto a la
                brevedad para asesorarte sin compromiso.</p>
            <div class="flex flex-col gap-2">
                <div class="flex items-center gap-3">
                    <span class="w-4 h-4 rounded-full bg-[#F2BF14]"></span>
                    <span class="text-sm text-[#3E153D] font-medium">Respuesta en menos de 24hs</span>
                </div>
                <div class="flex items-center gap-3">
                    <span class="w-4 h-4 rounded-full bg-[#F2BF14]"></span>
                    <span class="text-sm text-[#3E153D] font-medium">Asesoramiento sin compromiso</span>
                </div>
                <div class="flex items-center gap-3">
                    <span class="w-4 h-4 rounded-full bg-[#F2BF14]"></span>
                    <span class="text-sm text-[#3E153D] font-medium">Atención personalizada</span>
                </div>
            </div>
        </div>

        <form class="w-[50%] bg-white border border-gray-100 shadow-sm px-8 py-8 rounded-2xl flex flex-col gap-4">
            <div class="flex gap-4">
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
                class="w-full bg-[#3E153D] text-white py-3 rounded-lg text-sm font-semibold hover:bg-[#2c0f2b] transition">
                Enviar consulta →
            </button>
        </form>

    </div>
</section>
