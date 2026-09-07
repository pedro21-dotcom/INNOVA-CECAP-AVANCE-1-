<x-layout title="Brazo Robótico Articulado | INNOVA CECAP">
    <!-- Breadcrumbs -->
    <div class="border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <nav class="flex text-[0.65rem] font-semibold tracking-widest uppercase text-gray-400">
                <a href="/" class="hover:text-primary transition-colors">Inicio</a>
                <span class="mx-2">/</span>
                <a href="/programas" class="hover:text-primary transition-colors">Programas</a>
                <span class="mx-2">/</span>
                <span class="text-primary">Brazo Robótico</span>
            </nav>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12" x-data="{ modalOpen: false }">
        
        <!-- Hero Details -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16" data-aos="fade-up">
            <!-- Image -->
            <div class="relative h-[400px] md:h-[500px] rounded-3xl overflow-hidden shadow-lg">
                <img src="https://images.unsplash.com/photo-1485827404703-89b55fcc595e?w=800&q=80" alt="Brazo Robótico Articulado" class="w-full h-full object-cover">
            </div>

            <!-- Info -->
            <div class="flex flex-col justify-center">
                <div class="inline-block px-3 py-1 bg-green-50 text-primary text-[0.65rem] font-bold tracking-wider uppercase rounded-full mb-6 w-max">
                    2do - 3ro Secundaria
                </div>
                <h1 class="text-3xl md:text-5xl font-extrabold text-secondary leading-tight mb-6">
                    Brazo Robótico Articulado
                </h1>
                <p class="text-secondary-light leading-relaxed mb-8">
                    Ayudan a alcanzar nuevos niveles de productividad mediante una mayor velocidad, eficiencia y precisión. Las tecnologías de visión automática y redes permiten que los brazos robóticos vean, analicen y comprendan sus entornos.
                </p>

                <!-- Meta -->
                <div class="bg-white border border-gray-100 rounded-xl p-6 shadow-sm mb-8 grid grid-cols-3 divide-x divide-gray-100">
                    <div class="px-4 first:pl-0 last:pr-0">
                        <span class="block text-[0.6rem] font-bold text-gray-400 uppercase tracking-widest mb-1">Metodología</span>
                        <span class="font-bold text-secondary text-sm">STEM Completo</span>
                    </div>
                    <div class="px-4">
                        <span class="block text-[0.6rem] font-bold text-gray-400 uppercase tracking-widest mb-1">Duración</span>
                        <span class="font-bold text-secondary text-sm">12 Sesiones</span>
                    </div>
                    <div class="px-4">
                        <span class="block text-[0.6rem] font-bold text-gray-400 uppercase tracking-widest mb-1">Plataforma</span>
                        <span class="font-bold text-secondary text-sm">Arduino IDE</span>
                    </div>
                </div>

                <!-- Herramientas -->
                <div class="mb-10">
                    <h4 class="text-[0.65rem] font-bold text-primary tracking-widest uppercase mb-4">Herramientas e insumos incluidos:</h4>
                    <div class="flex flex-wrap gap-3">
                        @foreach(['Servomotores', 'Chasis acrílico CNC', 'Microcontrolador', 'Placa de expansión', 'Cables Dupont'] as $item)
                        <div class="flex items-center gap-2 border border-gray-200 rounded-full px-4 py-1.5 bg-white text-xs font-medium text-secondary-light">
                            <svg class="w-3.5 h-3.5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                            {{ $item }}
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Botones -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#" class="bg-primary hover:bg-primary-hover text-white px-8 py-3.5 rounded-full font-bold text-sm text-center transition-colors shadow-md shadow-primary/20">
                        Inscribirse ahora
                    </a>
                    <button @click="modalOpen = true" class="border-2 border-gray-300 text-secondary hover:border-secondary px-8 py-3.5 rounded-full font-bold text-sm text-center transition-colors flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        Syllabus (PDF)
                    </button>
                </div>
            </div>
        </div>

        <!-- Tabs & Contenido -->
        <div class="bg-white border border-gray-200 rounded-3xl p-8 md:p-12 shadow-sm mb-20" data-aos="fade-up">
            <!-- Tabs Header -->
            <div class="flex flex-wrap gap-8 border-b border-gray-200 mb-10">
                <button class="pb-4 font-bold text-primary border-b-2 border-primary">Contenido del curso</button>
                <button class="pb-4 font-medium text-gray-400 hover:text-secondary-light transition-colors">Materiales y Kit</button>
                <button class="pb-4 font-medium text-gray-400 hover:text-secondary-light transition-colors">Objetivos pedagógicos</button>
            </div>

            <!-- Modulos -->
            <div class="space-y-6">
                <!-- Mod 1 -->
                <div class="bg-gray-50 rounded-2xl p-6 flex flex-col md:flex-row gap-6 md:gap-12 items-start">
                    <div class="shrink-0 pt-1 border-b md:border-b-0 md:border-r border-gray-300 md:pr-12">
                        <span class="text-[0.65rem] font-bold text-primary uppercase tracking-widest whitespace-nowrap">Módulo 1</span>
                        <div class="hidden md:block w-3 h-[2px] bg-primary absolute -mt-[9px] ml-[3.5rem]"></div>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-secondary mb-2">Cinemática y Estructuras Mecánicas</h3>
                        <p class="text-sm text-secondary-light leading-relaxed">Conceptos fundamentales de equilibrio de fuerzas, articulaciones y grados de libertad mecánica.</p>
                    </div>
                </div>
                <!-- Mod 2 -->
                <div class="bg-gray-50 rounded-2xl p-6 flex flex-col md:flex-row gap-6 md:gap-12 items-start">
                    <div class="shrink-0 pt-1 border-b md:border-b-0 md:border-r border-gray-300 md:pr-12">
                        <span class="text-[0.65rem] font-bold text-primary uppercase tracking-widest whitespace-nowrap">Módulo 2</span>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-secondary mb-2">Actuadores y Servomotores</h3>
                        <p class="text-sm text-secondary-light leading-relaxed">Control preciso de giro, angulación y calibración de micro servomotores mecánicos.</p>
                    </div>
                </div>
                <!-- Mod 3 -->
                <div class="bg-gray-50 rounded-2xl p-6 flex flex-col md:flex-row gap-6 md:gap-12 items-start">
                    <div class="shrink-0 pt-1 border-b md:border-b-0 md:border-r border-gray-300 md:pr-12">
                        <span class="text-[0.65rem] font-bold text-primary uppercase tracking-widest whitespace-nowrap">Módulo 3</span>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-secondary mb-2">Programación en Arduino IDE</h3>
                        <p class="text-sm text-secondary-light leading-relaxed">Algoritmos para coordinar movimientos dinámicos, secuencias lógicas y automatización de agarre.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cursos Relacionados -->
        <div data-aos="fade-up">
            <div class="flex items-center gap-3 mb-2">
                <div class="h-[2px] w-6 bg-primary"></div>
                <span class="text-primary text-[0.65rem] font-bold tracking-widest uppercase">Sigue Explorando</span>
            </div>
            <h2 class="text-3xl font-extrabold text-secondary mb-8">Cursos relacionados</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div class="h-48 overflow-hidden bg-gray-100">
                        <img src="https://images.unsplash.com/photo-1516245834210-c4c142787335?w=500&q=80" alt="Lego WeDo 2.0" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="inline-block px-3 py-1 bg-green-50 text-primary text-[0.65rem] font-bold tracking-wider uppercase rounded-full mb-4 w-max">
                            1ro - 2do Primaria
                        </div>
                        <h3 class="text-xl font-bold text-secondary mb-3">Lego WeDo 2.0</h3>
                        <p class="text-sm text-secondary-light leading-relaxed mb-6 flex-grow">Primeros pasos en robótica educativa interactiva. Motores, poleas y sensores para dar vida a los bloques.</p>
                        <a href="/programas/lego-wedo" class="block w-full text-center py-2.5 border border-secondary text-secondary hover:bg-secondary hover:text-white rounded font-medium text-sm transition-colors">
                            Ver detalles &rarr;
                        </a>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div class="h-48 overflow-hidden bg-gray-100">
                        <img src="https://images.unsplash.com/photo-1616423640778-28d1b53229bd?w=500&q=80" alt="Semáforo Peatonal" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="inline-block px-3 py-1 bg-green-50 text-primary text-[0.65rem] font-bold tracking-wider uppercase rounded-full mb-4 w-max">
                            5to - 6to Primaria
                        </div>
                        <h3 class="text-xl font-bold text-secondary mb-3">Semáforo Peatonal</h3>
                        <p class="text-sm text-secondary-light leading-relaxed mb-6 flex-grow">Programación de secuencias y control de tráfico inteligente. Lógica computacional aplicada.</p>
                        <a href="/programas/semaforo" class="block w-full text-center py-2.5 border border-secondary text-secondary hover:bg-secondary hover:text-white rounded font-medium text-sm transition-colors">
                            Ver detalles &rarr;
                        </a>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div class="h-48 overflow-hidden bg-gray-100">
                        <img src="https://images.unsplash.com/photo-1620641788421-7a1c342ea42e?w=500&q=80" alt="Carro Robot Arduino 4x4" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="inline-block px-3 py-1 bg-green-50 text-primary text-[0.65rem] font-bold tracking-wider uppercase rounded-full mb-4 w-max">
                            4to - 5to Secundaria
                        </div>
                        <h3 class="text-xl font-bold text-secondary mb-3">Carro Robot Arduino 4x4</h3>
                        <p class="text-sm text-secondary-light leading-relaxed mb-6 flex-grow">Vehículos autónomos con sensor de obstáculos, bluetooth y motores de tracción total.</p>
                        <a href="/programas/carro-robot" class="block w-full text-center py-2.5 border border-secondary text-secondary hover:bg-secondary hover:text-white rounded font-medium text-sm transition-colors">
                            Ver detalles &rarr;
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Lead Capture -->
        <div x-show="modalOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true" style="display: none;">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                
                <div x-show="modalOpen" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 z-0 bg-secondary/80 backdrop-blur-sm transition-opacity" aria-hidden="true" @click="modalOpen = false"></div>

                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                
                <div x-show="modalOpen" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" class="relative z-10 inline-block align-bottom bg-white rounded-3xl text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg w-full">
                    <div class="bg-white px-8 pt-8 pb-6">
                        <div class="sm:flex sm:items-start">
                            <div class="mt-3 text-center sm:mt-0 sm:text-left w-full">
                                <h3 class="text-2xl leading-6 font-extrabold text-secondary mb-2" id="modal-title">
                                    Descargar Malla Curricular
                                </h3>
                                <p class="text-sm text-secondary-light mb-6">
                                    Ingresa tus datos para enviarte el PDF con el syllabus completo del programa.
                                </p>
                                
                                <form class="space-y-4">
                                    <div>
                                        <label class="block text-xs font-bold text-gray-500 uppercase tracking-widest mb-1">Nombre Completo</label>
                                        <input type="text" class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary focus:border-primary outline-none" placeholder="Ej. Juan Pérez">
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold text-gray-500 uppercase tracking-widest mb-1">Correo Electrónico</label>
                                        <input type="email" class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary focus:border-primary outline-none" placeholder="tucorreo@ejemplo.com">
                                    </div>
                                    <button type="button" @click="downloadMalla(); modalOpen = false;" class="w-full bg-primary hover:bg-primary-hover text-white py-3 rounded-full font-bold text-sm transition-colors shadow-md mt-4">
                                        Descargar PDF ahora
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse border-t border-gray-100">
                        <button type="button" @click="modalOpen = false" class="w-full inline-flex justify-center rounded-full border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                            Cancelar
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Script de AlpineJS (Descarga) -->
    <script>
        function downloadMalla() {
            const a = document.createElement('a');
            a.href = '/pdf/malla_curricular.pdf';
            a.download = 'Malla_Curricular_Innova_Cecap.pdf';
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
        }
    </script>
</x-layout>
