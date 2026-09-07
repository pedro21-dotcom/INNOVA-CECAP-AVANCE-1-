<header class="bg-white shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center gap-3">
                <a href="/" class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-secondary rounded flex items-center justify-center text-white">
                        <svg xmlns="http://www.w3.org/200O/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-xl font-bold text-secondary tracking-tight leading-none uppercase">Innova Cecap</span>
                        <span class="text-[0.65rem] font-semibold text-secondary-light uppercase tracking-[0.2em] mt-1">Robotics School</span>
                    </div>
                </a>
            </div>

            <!-- Navigation Links -->
            <nav class="hidden md:flex space-x-8">
                <a href="/" class="{{ request()->is('/') ? 'text-primary font-semibold' : 'text-secondary-light hover:text-primary transition-colors' }}">Inicio</a>
                <a href="/nosotros" class="{{ request()->is('nosotros') ? 'text-primary font-semibold' : 'text-secondary-light hover:text-primary transition-colors' }}">Nosotros</a>
                <a href="/programas" class="{{ request()->is('programas*') ? 'text-primary font-semibold' : 'text-secondary-light hover:text-primary transition-colors' }}">Programas</a>
                <a href="/certificaciones" class="{{ request()->is('certificaciones') ? 'text-primary font-semibold' : 'text-secondary-light hover:text-primary transition-colors' }}">Certificaciones</a>
                <a href="/blog" class="{{ request()->is('blog') ? 'text-primary font-semibold' : 'text-secondary-light hover:text-primary transition-colors' }}">Blog</a>
                <a href="/contacto" class="{{ request()->is('contacto') ? 'text-primary font-semibold' : 'text-secondary-light hover:text-primary transition-colors' }}">Contacto</a>
            </nav>

            <!-- CTA Button -->
            <div class="hidden md:flex items-center">
                <a href="#" class="bg-primary hover:bg-primary-hover text-white px-6 py-2.5 rounded-full text-sm font-bold transition-colors flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    Intranet
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="flex items-center md:hidden" x-data="{ open: false }">
                <button @click="open = !open" type="button" class="text-secondary-light hover:text-secondary focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</header>
