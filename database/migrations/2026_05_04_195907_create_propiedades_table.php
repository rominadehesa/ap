    <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration
    {
        /**
         * Run the migrations.
         */
        public function up(): void
        {
            Schema::create('propiedades', function (Blueprint $table) {
                $table->id();

                $table->string('titulo');
                $table->string('tipo');
                $table->string('operacion');

                $table->string('direccion');
                $table->string('ciudad');
                $table->string('zona')->nullable();
                $table->string('barrio')->nullable();

                $table->decimal('superficie_total', 8, 2)->nullable();
                $table->decimal('superficie_cubierta', 8, 2)->nullable();

                $table->integer('ambientes')->nullable();
                $table->integer('dormitorios')->nullable();
                $table->integer('banios')->nullable();
                $table->integer('cant_pisos')->nullable();

                $table->string('estado_inmueble')->nullable();

                $table->text('descripcion')->nullable();
                $table->text('slogan')->nullable();

                $table->string('imagen_portada_url')->nullable();

                // servicios
                $table->boolean('tiene_luz')->default(false);
                $table->boolean('tiene_gas_natural')->default(false);
                $table->boolean('tiene_gas_garrafa')->default(false);
                $table->boolean('tiene_agua_corriente')->default(false);
                $table->boolean('tiene_cloaca')->default(false);
                $table->boolean('tiene_internet')->default(false);
                $table->boolean('tiene_pavimento')->default(false);

                // comodidades
                $table->boolean('tiene_cochera')->default(false);
                $table->boolean('tiene_patio')->default(false);
                $table->boolean('tiene_jardin')->default(false);
                $table->boolean('tiene_pileta')->default(false);
                $table->boolean('tiene_quincho')->default(false);
                $table->boolean('tiene_terraza')->default(false);
                $table->boolean('tiene_balcon')->default(false);
                $table->boolean('tiene_ascensor')->default(false);
                $table->boolean('tiene_seguridad')->default(false);
                $table->boolean('tiene_parrilla')->default(false);
                $table->boolean('tiene_calefaccion')->default(false);
                $table->boolean('tiene_aire_acondicionado')->default(false);
                $table->boolean('apto_credito')->default(false);

                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            Schema::dropIfExists('propiedades');
        }
    };
