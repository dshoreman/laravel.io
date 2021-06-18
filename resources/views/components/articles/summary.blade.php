@props([
    'image' => null,
    'title',
    'summary',
    'url',
    'date',
    'isFeatured' => false,
])

<div class="mb-8 md:mb-0">
    @if ($image)
        <img src="{{ $image }}" class="mb-6 rounded-lg h-72" />
    @endif

    <span class="font-mono text-gray-700 leading-6 mb-2 block">
        {{ $date }}
    </span>

    @if ($isFeatured)
        <h3 class="text-gray-900 text-3xl font-bold leading-10 mb-2">
            {{ $title }}
        </h3>
    @else
        <h4 class="text-gray-900 text-2xl font-bold leading-8 mb-3">
            {{ $title }}
        </h4>
    @endif

    <p class="text-gray-800 leading-7 mb-3">
        {{ $summary }}
    </p>

    <x-buttons.arrow-button href="{{ $url }}">
        Read article
    </x-buttons.arrow-button>
</div>

