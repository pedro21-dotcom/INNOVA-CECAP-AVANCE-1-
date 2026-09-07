@props(['item'])

<article class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-2xl hover:shadow-primary/15 hover:-translate-y-1 transition-all duration-300 group" data-aos="fade-up" data-aos-delay="{{ $item['delay'] ?? '0' }}">
    <div class="h-60 relative overflow-hidden bg-gray-100">
        <img src="{{ $item['imagen'] }}" alt="{{ $item['titulo'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
        <div class="absolute top-4 left-4 bg-white/90 border border-white/20 text-primary text-[0.65rem] font-bold px-3 py-1.5 rounded-md shadow-sm uppercase tracking-wider">{{ $item['categoria'] }}</div>
    </div>
    <div class="p-8">
        <div class="flex items-center gap-4 text-xs font-medium text-gray-400 mb-4">
            <span class="flex items-center gap-1">{{ $item['fecha'] }}</span>
            <span class="flex items-center gap-1">{{ $item['lectura'] }}</span>
        </div>
        <h3 class="text-xl font-bold text-secondary mb-3 group-hover:text-primary transition-colors">
            {{ $item['titulo'] }}
        </h3>
        <p class="text-sm text-secondary-light leading-relaxed mb-6">
            {{ $item['extracto'] }}
        </p>
        <a href="#" class="text-primary font-bold text-sm flex items-center gap-2 group-hover:gap-3 transition-all">
            Leer artículo completo 
        </a>
    </div>
</article>