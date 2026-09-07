<x-layout title="Contacto | INNOVA CECAP">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
            
            <!-- Left Info -->
            <div class="space-y-10" data-aos="fade-right">
                <div class="space-y-6">
                    <div class="flex items-center gap-3">
                        <div class="h-[2px] w-8 bg-primary"></div>
                        <span class="text-primary text-xs font-bold tracking-widest uppercase">Canales de Comunicación</span>
                    </div>
                    <h1 class="text-4xl md:text-5xl font-extrabold text-secondary leading-tight">
                        Conéctate con Nosotros
                    </h1>
                    <p class="text-secondary-light leading-relaxed max-w-lg">
                        Estamos listos para resolver todas tus consultas académicas o coordinar la implementación de nuestros talleres en tu institución educativa.
                    </p>
                </div>

                <!-- Contact Cards -->
                <div class="space-y-4">
                    <!-- WhatsApp -->
                    <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm flex items-center gap-6">
                        <div class="w-12 h-12 rounded-full bg-gray-50 flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                        </div>
                        <div>
                            <span class="block text-xs font-medium text-gray-500 mb-1">WhatsApp Académico</span>
                            <span class="block font-bold text-secondary text-lg">939 450 569</span>
                        </div>
                    </div>
                    <!-- Asesora -->
                    <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm flex items-center gap-6">
                        <div class="w-12 h-12 rounded-full bg-gray-50 flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                        </div>
                        <div>
                            <span class="block text-xs font-medium text-gray-500 mb-1">Asesora Académica Responsable</span>
                            <span class="block font-bold text-secondary text-lg">Olenka Jharet Inga Varje</span>
                        </div>
                    </div>
                    <!-- Dirección -->
                    <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm flex items-center gap-6">
                        <div class="w-12 h-12 rounded-full bg-gray-50 flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                        <div>
                            <span class="block text-xs font-medium text-gray-500 mb-1">Dirección Central</span>
                            <span class="block font-bold text-secondary text-lg">Av. de la Tecnología 450, Lima, Perú</span>
                        </div>
                    </div>
                </div>

                <!-- Mapa -->
                <div>
                    <h4 class="text-xs font-bold text-primary tracking-widest uppercase mb-4">Nuestra Ubicación</h4>
                    <div class="relative h-64 rounded-2xl overflow-hidden shadow-sm border border-gray-200 bg-gray-100 flex items-center justify-center">
                        <!-- Placeholder for map -->
                        <div class="text-center">
                            <svg class="w-12 h-12 text-primary mx-auto mb-2" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 010-5 2.5 2.5 0 010 5z"/></svg>
                            <span class="block font-bold text-secondary">INNOVA CECAP</span>
                            <span class="text-xs text-secondary-light">Central Office</span>
                        </div>
                        <!-- Decorative map lines could be added via SVG, using simple placeholder -->
                        <svg class="absolute inset-0 w-full h-full text-gray-300 opacity-50" preserveAspectRatio="none" viewBox="0 0 100 100">
                            <path stroke="currentColor" stroke-width="1" fill="none" d="M0,20 L40,60 L60,40 L100,80 M20,0 L60,100 M80,0 L40,100"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Right Form -->
            <div class="bg-white border border-gray-200 rounded-3xl p-8 md:p-10 shadow-xl shadow-gray-200/50" data-aos="fade-left" data-aos-delay="200">
                <h3 class="text-2xl font-extrabold text-secondary mb-3">Envíanos un mensaje</h3>
                <p class="text-sm text-secondary-light mb-8 leading-relaxed">
                    Completa tus datos y nos pondremos en contacto contigo en menos de 24 horas hábiles.
                </p>

                <form class="space-y-6">
                    <div>
                        <label for="nombre" class="block text-sm font-bold text-secondary mb-2">Nombre Completo</label>
                        <input type="text" id="nombre" class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 text-sm text-secondary focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all" placeholder="Ej. Juan Pérez">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-bold text-secondary mb-2">Correo Electrónico</label>
                        <input type="email" id="email" class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 text-sm text-secondary focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all" placeholder="Ej. juan@colegio.edu.pe">
                    </div>
                    <div>
                        <label for="telefono" class="block text-sm font-bold text-secondary mb-2">Teléfono de Contacto</label>
                        <input type="text" id="telefono" class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 text-sm text-secondary focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all" placeholder="Ej. +51 999 888 777">
                    </div>
                    <div>
                        <label for="mensaje" class="block text-sm font-bold text-secondary mb-2">Mensaje o Consulta</label>
                        <textarea id="mensaje" rows="4" class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 text-sm text-secondary focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all resize-none" placeholder="Cuéntanos sobre tu institución o interés en nuestros programas de robótica..."></textarea>
                    </div>
                    <button type="button" class="w-full bg-primary hover:bg-primary-hover text-white py-3.5 rounded-full font-bold text-sm flex items-center justify-center gap-2 transition-colors shadow-md shadow-primary/20">
                        Enviar Formulario
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </button>
                </form>
            </div>
            
        </div>

        <!-- FAQ Section -->
        <div class="mt-24 max-w-3xl mx-auto" data-aos="fade-up">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-extrabold text-secondary">Preguntas Frecuentes</h2>
                <p class="text-secondary-light mt-2">Respuestas rápidas a las dudas más comunes de padres e instituciones.</p>
            </div>
            
            <div class="space-y-4">
                <!-- FAQ Item 1 -->
                <div x-data="{ expanded: false }" class="bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-sm hover:border-primary/50 transition-colors">
                    <button @click="expanded = !expanded" class="w-full px-6 py-4 flex items-center justify-between font-bold text-secondary text-left focus:outline-none">
                        <span>¿Los alumnos necesitan conocimientos previos en robótica?</span>
                        <svg class="w-5 h-5 text-primary transform transition-transform duration-300" :class="{ 'rotate-180': expanded }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div x-show="expanded" x-collapse x-cloak>
                        <div class="px-6 pb-4 text-sm text-secondary-light leading-relaxed">
                            No, nuestros programas están diseñados desde cero. La metodología STEM permite que cualquier estudiante, sin importar su experiencia previa, pueda aprender a su propio ritmo.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div x-data="{ expanded: false }" class="bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-sm hover:border-primary/50 transition-colors">
                    <button @click="expanded = !expanded" class="w-full px-6 py-4 flex items-center justify-between font-bold text-secondary text-left focus:outline-none">
                        <span>¿Los kits de robótica están incluidos en el costo?</span>
                        <svg class="w-5 h-5 text-primary transform transition-transform duration-300" :class="{ 'rotate-180': expanded }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div x-show="expanded" x-collapse x-cloak>
                        <div class="px-6 pb-4 text-sm text-secondary-light leading-relaxed">
                            Sí, INNOVA CECAP provee todos los insumos (motores, chasis, microcontroladores y sensores) durante el desarrollo de las clases presenciales. El alumno no necesita comprar materiales adicionales.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div x-data="{ expanded: false }" class="bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-sm hover:border-primary/50 transition-colors">
                    <button @click="expanded = !expanded" class="w-full px-6 py-4 flex items-center justify-between font-bold text-secondary text-left focus:outline-none">
                        <span>¿Cómo funciona la certificación oficial?</span>
                        <svg class="w-5 h-5 text-primary transform transition-transform duration-300" :class="{ 'rotate-180': expanded }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div x-show="expanded" x-collapse x-cloak>
                        <div class="px-6 pb-4 text-sm text-secondary-light leading-relaxed">
                            Al finalizar el módulo, los estudiantes rinden un examen práctico donde deben resolver un desafío. Si lo aprueban, reciben el certificado respaldado por el Instituto ADDIS.
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-layout>
