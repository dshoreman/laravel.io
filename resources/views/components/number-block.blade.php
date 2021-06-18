@props([
    'title',
    'total',
    'background'
])

<div class="flex flex-col items-center rounded w-1/3 bg-lio-100 mr-6 py-9">
    <h3 class="uppercase text-lio-500 text-lg font-bold text-center mb-11">
        {{ $title }}
        <span class="text-4xl text-gray-900 block leading-tight">{{ $total }}</span>
    </h3>
    <div 
        class="number-block w-full h-44 bg-contain" 
        style="background-image: url('{{ $background }}');"
    >
    </div>
</div>