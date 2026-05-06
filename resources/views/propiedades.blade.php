<!DOCTYPE html>
<html lang="en">

@include('frames.head', ['title' => 'Inicio'])

<body>
    <header>
        @include('frames.nav')
        <main>

        </main>
    </header>

    <section id="explorar" class="bg-white">

        <!-- Header -->
        <div class="mb-10">
            <div class="flex justify-start">
                <span class="text-center text-md mb-10 span-tag">Explorar</span>
            </div>
            <h1 class="text-3xl lg:text-5xl mt-2">Todas las propiedades</h1>
        </div>

        <!-- Layout -->
        <div class="flex flex-col lg:flex-row gap-10">

            <!-- FILTROS -->
            <div class="w-full lg:w-1/4 p-6 shadow rounded-xl bg-white h-fit">

                <p class="text-sm text-gray-400 mb-6">Filtrar por</p>

                <form method="GET" class="space-y-4">

                    <div>
                        <label class="text-sm text-gray-500">Tipo</label>
                        <select name="tipo" class="w-full px-3 py-2 rounded-md border border-gray-200">
                            <option value="">Todos</option>
                            <option value="casa">Casa</option>
                            <option value="departamento">Departamento</option>
                            <option value="terreno">Terreno</option>
                            <option value="ph">PH</option>
                        </select>
                    </div>

                    <div>
                        <label class="text-sm text-gray-500">Ciudad</label>
                        <input type="text" name="ciudad" placeholder="Ej: Tigre"
                            class="w-full px-3 py-2 rounded-md border border-gray-200">
                    </div>

                    <div>
                        <label class="text-sm text-gray-500">Ambientes</label>
                        <select name="ambientes" class="w-full px-3 py-2 rounded-md border border-gray-200">
                            <option value="">Cualquiera</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4+</option>
                        </select>
                    </div>

                    <div class="flex gap-2">
                        <input type="number" name="m2_min" placeholder="M² mín"
                            class="w-1/2 px-3 py-2 rounded-md border border-gray-200">

                        <input type="number" name="m2_max" placeholder="M² máx"
                            class="w-1/2 px-3 py-2 rounded-md border border-gray-200">
                    </div>

                    <button type="submit"
                        class="w-full py-2 bg-[#3E153D] text-white rounded-md text-sm hover:bg-[#2c0f2b] transition">
                        Buscar
                    </button>

                </form>
            </div>

            <!-- RESULTADOS -->
            <div class="w-full lg:w-3/4">

                <p class="text-gray-400 mb-6">Resultados</p>

                <!-- CARD -->
                <article class="bg-white rounded-xl shadow-sm overflow-hidden flex flex-col lg:flex-row">

                    <!-- Imagen -->
                    <div class="w-full lg:w-1/3 h-48 lg:h-auto bg-gray-200"></div>

                    <!-- Info -->
                    <div class="p-6">
                        <h2 class="text-lg font-semibold mb-2">
                            Casa de dos ambientes con balcón
                        </h2>

                        <p class="text-sm text-gray-400 mb-4">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>

                        <p class="text-sm text-gray-500">
                            230 m² · 3 habitaciones
                        </p>
                    </div>

                </article>

            </div>

        </div>
    </section>
    @include('frames.contactForm')
    @include('frames.footer')

</body>

</html>
