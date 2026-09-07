<x-layout title="Blog y Noticias | INNOVA CECAP">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        
        <div class="text-center space-y-4 mb-16" data-aos="fade-up">
            <div class="flex items-center justify-center gap-3">
                <div class="h-[2px] w-8 bg-secondary"></div>
                <span class="text-primary text-xs font-bold tracking-widest uppercase">Actualmente</span>
                <div class="h-[2px] w-8 bg-secondary"></div>
            </div>
            <h1 class="text-4xl md:text-5xl font-extrabold text-secondary leading-tight">
                Noticias y Recursos STEM
            </h1>
            <p class="text-secondary-light leading-relaxed max-w-2xl mx-auto">
                Mantente al tanto de las últimas tendencias en robótica educativa, metodologías de enseñanza y logros de nuestra comunidad.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($articulos as $item)
                <x-article-card :$item />
            @endforeach
        </div>

    </div>
</x-layout>
