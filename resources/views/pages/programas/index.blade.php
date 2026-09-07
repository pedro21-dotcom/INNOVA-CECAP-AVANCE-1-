<x-layout title="Programas | INNOVA CECAP">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12"
         x-data="programFilter()">
        
        <div class="flex flex-col lg:flex-row gap-8">
            
            <!-- Sidebar / Filtros -->
            <aside class="w-full lg:w-64 shrink-0">
                <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm sticky top-28">
                    <div class="flex items-center justify-between mb-8">
                        <h3 class="text-lg font-bold text-secondary">Filtros</h3>
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path></svg>
                    </div>

                    <!-- Nivel -->
                    <div class="mb-8">
                        <h4 class="text-xs font-bold text-primary tracking-widest uppercase mb-4">Nivel</h4>
                        <div class="space-y-3">
                            <label class="flex items-center gap-3 cursor-pointer">
                                <input type="checkbox" value="Inicial" x-model="filters.nivel" class="w-4 h-4 rounded border-gray-300 text-primary focus:ring-primary/20 accent-primary">
                                <span class="text-sm text-secondary-light">Inicial</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer">
                                <input type="checkbox" value="Primaria" x-model="filters.nivel" class="w-4 h-4 rounded border-gray-300 text-primary focus:ring-primary/20 accent-primary">
                                <span class="text-sm text-secondary-light">Primaria</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer">
                                <input type="checkbox" value="Secundaria" x-model="filters.nivel" class="w-4 h-4 rounded border-gray-300 text-primary focus:ring-primary/20 accent-primary">
                                <span class="text-sm text-secondary-light">Secundaria</span>
                            </label>
                        </div>
                    </div>

                    <!-- Grado -->
                    <div class="mb-8">
                        <h4 class="text-xs font-bold text-primary tracking-widest uppercase mb-4">Grado</h4>
                        <div class="space-y-3">
                            <label class="flex items-center gap-3 cursor-pointer">
                                <input type="checkbox" value="1ro - 6to Primaria" x-model="filters.grado" class="w-4 h-4 rounded border-gray-300 text-primary focus:ring-primary/20 accent-primary">
                                <span class="text-sm text-secondary-light">1ro - 6to Primaria</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer">
                                <input type="checkbox" value="1ro - 5to Secundaria" x-model="filters.grado" class="w-4 h-4 rounded border-gray-300 text-primary focus:ring-primary/20 accent-primary">
                                <span class="text-sm text-secondary-light">1ro - 5to Secundaria</span>
                            </label>
                        </div>
                    </div>

                    <!-- Tipo -->
                    <div>
                        <h4 class="text-xs font-bold text-primary tracking-widest uppercase mb-4">Tipo</h4>
                        <div class="space-y-3">
                            <label class="flex items-center gap-3 cursor-pointer">
                                <input type="checkbox" value="Robótica" x-model="filters.tipo" class="w-4 h-4 rounded border-gray-300 text-primary focus:ring-primary/20 accent-primary">
                                <span class="text-sm text-secondary-light">Robótica</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer">
                                <input type="checkbox" value="Programación" x-model="filters.tipo" class="w-4 h-4 rounded border-gray-300 text-primary focus:ring-primary/20 accent-primary">
                                <span class="text-sm text-secondary-light">Programación</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer">
                                <input type="checkbox" value="Electrónica" x-model="filters.tipo" class="w-4 h-4 rounded border-gray-300 text-primary focus:ring-primary/20 accent-primary">
                                <span class="text-sm text-secondary-light">Electrónica</span>
                            </label>
                        </div>
                    </div>
                    
                    <button @click="resetFilters()" x-show="hasActiveFilters" x-transition class="mt-6 w-full py-2 text-sm text-gray-500 hover:text-primary hover:bg-green-50 rounded-lg transition-colors">
                        Limpiar Filtros
                    </button>
                </div>
            </aside>

            <!-- Main Content -->
            <div class="flex-grow">
                <div class="flex flex-col md:flex-row md:items-end justify-between mb-8 gap-4">
                    <div>
                        <div class="flex items-center gap-3 mb-2">
                            <div class="h-[2px] w-6 bg-primary"></div>
                            <span class="text-primary text-[0.65rem] font-bold tracking-widest uppercase">Explorar Clases</span>
                        </div>
                        <h1 class="text-3xl md:text-4xl font-extrabold text-secondary">Nuestros Programas</h1>
                    </div>
                    <p class="text-sm text-gray-500 font-mono" x-text="`Mostrando ${filteredProgramas.length} de ${programas.length} programas`"></p>
                </div>

                <!-- Grid de programas -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <template x-for="p in filteredProgramas" :key="p.titulo">
                        <div x-transition class="group h-[400px] [perspective:1000px]">
                            <div class="relative w-full h-full transition-transform duration-700 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)]">
                                
                                <!-- Front Face -->
                                <div class="absolute inset-0 bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col shadow-sm [backface-visibility:hidden]">
                                    <div class="h-48 overflow-hidden bg-gray-100 relative shrink-0">
                                        <img :src="p.img" :alt="p.titulo" class="w-full h-full object-cover">
                                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur text-secondary text-[0.6rem] font-bold px-2 py-1 rounded-md shadow-sm" x-text="p.tipo"></div>
                                    </div>
                                    <div class="p-6 flex flex-col flex-grow items-center text-center justify-center">
                                        <div class="inline-block px-3 py-1 bg-green-50 text-primary text-[0.65rem] font-bold tracking-wider uppercase rounded-full mb-3 w-max" x-text="p.nivel"></div>
                                        <h3 class="text-xl font-bold text-secondary" x-text="p.titulo"></h3>
                                        <p class="text-xs text-gray-400 mt-2 flex items-center gap-1">
                                            Pasa el cursor para más info <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path></svg>
                                        </p>
                                    </div>
                                </div>

                                <!-- Back Face -->
                                <div class="absolute inset-0 bg-secondary rounded-2xl overflow-hidden flex flex-col p-8 shadow-xl [transform:rotateY(180deg)] [backface-visibility:hidden]">
                                    <div class="flex flex-col flex-grow justify-center">
                                        <div class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center mb-4">
                                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        </div>
                                        <h3 class="text-xl font-bold text-white mb-2" x-text="p.titulo"></h3>
                                        <p class="text-sm text-gray-300 leading-relaxed mb-6" x-text="p.desc"></p>
                                        <div class="mt-auto space-y-3 w-full">
                                            <a :href="'/programas/brazo-robotico'" class="block w-full text-center py-2.5 bg-primary text-white font-bold hover:bg-primary-hover rounded-full text-sm transition-colors shadow-md shadow-primary/20">
                                                Ver detalles
                                            </a>
                                            <button @click.prevent="modalOpen = true" class="block w-full text-center py-2 border-2 border-white/20 text-white hover:bg-white/10 font-bold rounded-full text-sm transition-colors">
                                                📥 Descargar Malla
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </template>
                </div>

                <!-- Estado Vacío -->
                <div x-show="filteredProgramas.length === 0" class="py-16 text-center border-2 border-dashed border-gray-200 rounded-3xl" style="display: none;">
                    <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <h3 class="text-xl font-bold text-secondary mb-2">No se encontraron programas</h3>
                    <p class="text-secondary-light">Intenta ajustando los filtros seleccionados para ver más resultados.</p>
                </div>

                <!-- Paginación (Placeholder Visual) -->
                <div class="mt-12 flex justify-center items-center space-x-2" x-show="filteredProgramas.length > 0">
                    <button class="w-10 h-10 rounded-full border border-gray-200 flex items-center justify-center text-gray-400 hover:text-secondary hover:bg-gray-50 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    </button>
                    <button class="w-10 h-10 rounded-full bg-primary text-white font-medium flex items-center justify-center">1</button>
                    <button class="w-10 h-10 rounded-full border border-gray-200 text-secondary font-medium hover:bg-gray-50 transition-colors flex items-center justify-center">2</button>
                    <button class="w-10 h-10 rounded-full border border-gray-200 flex items-center justify-center text-gray-400 hover:text-secondary hover:bg-gray-50 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </button>
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

    <!-- Script de AlpineJS -->
    <script>
        function programFilter() {
            return {
                modalOpen: false,
                filters: {
                    nivel: [],
                    grado: [],
                    tipo: []
                },
                programas: [
                    { 
                        img: 'https://images.unsplash.com/photo-1585366119957-e9730b6d0f60?w=500&q=80', 
                        nivel: 'Inicial', 
                        grado: 'Inicial',
                        tipo: 'Programación',
                        titulo: 'Lego Digital Designer', 
                        desc: 'Introducción amigable al diseño 3D con bloques y el desarrollo de habilidades constructivas digitales iniciales.'
                    },
                    { 
                        img: 'https://images.unsplash.com/photo-1516245834210-c4c142787335?w=500&q=80', 
                        nivel: 'Primaria', 
                        grado: '1ro - 6to Primaria',
                        tipo: 'Robótica',
                        titulo: 'Lego WeDo 2.0', 
                        desc: 'Primeros pasos en robótica educativa interactiva. Creación de motores, poleas y sensores para dar vida a los bloques.'
                    },
                    { 
                        img: 'https://images.unsplash.com/photo-1555664424-778a1e5e1b48?w=500&q=80', 
                        nivel: 'Primaria', 
                        grado: '1ro - 6to Primaria',
                        tipo: 'Electrónica',
                        titulo: 'Led Nocturno Automático', 
                        desc: 'Fundamentos de electrónica práctica y circuitos básicos. Comprendiendo cómo la luz activa la corriente automáticamente.'
                    },
                    { 
                        img: 'https://images.unsplash.com/photo-1616423640778-28d1b53229bd?w=500&q=80', 
                        nivel: 'Primaria', 
                        grado: '1ro - 6to Primaria',
                        tipo: 'Programación',
                        titulo: 'Semáforo Peatonal', 
                        desc: 'Programación de secuencias y control de tráfico inteligente. Lógica computacional aplicada a la vida real.'
                    },
                    { 
                        img: 'https://images.unsplash.com/photo-1485827404703-89b55fcc595e?w=500&q=80', 
                        nivel: 'Secundaria', 
                        grado: '1ro - 5to Secundaria',
                        tipo: 'Robótica',
                        titulo: 'Brazo Robótico Articulado', 
                        desc: 'Técnicas avanzadas de servomotores y precisión milimétrica. Automatización industrial al alcance de los jóvenes.'
                    },
                    { 
                        img: 'https://images.unsplash.com/photo-1620641788421-7a1c342ea42e?w=500&q=80', 
                        nivel: 'Secundaria', 
                        grado: '1ro - 5to Secundaria',
                        tipo: 'Robótica',
                        titulo: 'Carro Robot Arduino 4x4', 
                        desc: 'Diseño y programación de vehículos autónomos con sensor de obstáculos, bluetooth y motores de tracción total.'
                    },
                    { 
                        img: 'https://images.unsplash.com/photo-1527443154391-507e9dc6c5cc?w=500&q=80', 
                        nivel: 'Secundaria', 
                        grado: '1ro - 5to Secundaria',
                        tipo: 'Programación',
                        titulo: 'Desarrollo de Videojuegos', 
                        desc: 'Crea tus propios juegos 2D y 3D utilizando motores gráficos modernos. Aprende lógica de programación divertida.'
                    },
                    { 
                        img: 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=500&q=80', 
                        nivel: 'Primaria', 
                        grado: '1ro - 6to Primaria',
                        tipo: 'Programación',
                        titulo: 'Scratch para Niños', 
                        desc: 'El lenguaje de programación por bloques más popular para introducir a los más pequeños en la lógica de programación.'
                    }
                ],
                
                get filteredProgramas() {
                    return this.programas.filter(p => {
                        const matchNivel = this.filters.nivel.length === 0 || this.filters.nivel.includes(p.nivel);
                        const matchGrado = this.filters.grado.length === 0 || this.filters.grado.includes(p.grado);
                        const matchTipo = this.filters.tipo.length === 0 || this.filters.tipo.includes(p.tipo);
                        
                        return matchNivel && matchGrado && matchTipo;
                    });
                },

                get hasActiveFilters() {
                    return this.filters.nivel.length > 0 || this.filters.grado.length > 0 || this.filters.tipo.length > 0;
                },

                resetFilters() {
                    this.filters.nivel = [];
                    this.filters.grado = [];
                    this.filters.tipo = [];
                },

                downloadMalla() {
                    const a = document.createElement('a');
                    a.href = '/pdf/malla_curricular.pdf';
                    a.download = 'Malla_Curricular_Innova_Cecap.pdf';
                    document.body.appendChild(a);
                    a.click();
                    document.body.removeChild(a);
                }
            }
        }
    </script>
</x-layout>
