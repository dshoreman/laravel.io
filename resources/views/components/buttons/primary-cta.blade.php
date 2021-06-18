<span {{ $attributes->merge(['class' => 'inline-flex rounded shadow-sm']) }}>
    @if ($attributes->has('href'))
        <a class="w-full bg-lio-500 border border-transparent rounded py-2 px-4 inline-flex justify-center text-lg leading-6 text-white">
            {{ $slot }}
        </a>
    @else
        <button class = "w-full bg-lio-500 border border-transparent rounded py-2 px-4 inline-flex justify-center text-lg leading-6 text-white">
            {{ $slot }}
        </button>
    @endif
</span>