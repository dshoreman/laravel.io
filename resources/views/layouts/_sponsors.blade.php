<div class="flex justify-center">
    <div class="w-2/3 text-center">
        <p class="text-lg mb-12">
            We'd like to thank these <x-accent-text>amazing companies</x-accent-text> for supporting us
        </p>

        <div class="mt-6 grid grid-cols-2 gap-y-8 lg:grid-cols-4">
            <div class="col-span-2 flex justify-center lg:col-span-1">
                <x-sponsor-logo url="https://beyondco.de" logo="{{ asset('images/sponsors/beyondcode.png') }}" company="Beyond Code" />
            </div>

            <div class="col-span-2 flex justify-center lg:col-span-1">
                <x-sponsor-logo url="https://devsquad.com" logo="{{ asset('images/sponsors/devsquad.png') }}" company="Beyond Code" />
            </div>

            <div class="col-span-2 flex justify-center lg:col-span-1">
                <x-sponsor-logo url="https://usefathom.com/ref/7A8QGC" logo="{{ asset('images/sponsors/fathom.png') }}" company="Fathom" />
            </div>

            <div class="col-span-2 flex justify-center lg:col-span-1">
                <x-sponsor-logo url="https://forge.laravel.com/" logo="{{ asset('images/sponsors/forge.png') }}" company="Forge" />
            </div>

            <div class="col-span-2 flex justify-center lg:col-span-1">
                <x-sponsor-logo url="https://envoyer.io/" logo="{{ asset('images/sponsors/envoyer.png') }}" company="Envoyer" />
            </div>

            <div class="col-span-2 flex justify-center lg:col-span-1">
                <x-sponsor-logo url="https://blackfire.io/" logo="{{ asset('images/sponsors/blackfire-io.png') }}" company="Blackfire.io" />
            </div>
        
            <div class="col-span-2 flex justify-center lg:col-span-1">
                <x-sponsor-logo url="https://akaunting.com/developers?utm_source=Laravelio&utm_medium=Banner&utm_campaign=Developers" logo="{{ asset('images/sponsors/akaunting.png') }}" company="Akaunting" />
            </div>

            <div class="col-span-2 flex justify-center lg:col-span-1">
                <x-sponsor-logo url="https://larajobs.com" logo="{{ asset('images/sponsors/larajobs.svg') }}" company="LaraJobs" />
            </div>

            <div class="col-span-2 flex justify-center lg:col-span-4">
                <x-sponsor-logo url="https://ter.li/vj4bxb" logo="{{ asset('images/sponsors/scout-apm.jpg') }}" company="Scout APM" />
            </div>
        </div>

        <div class="mt-4">
            @include('layouts._ads._cta', ['text' => 'Your logo here?'])
        </div>
    </div>
</div>
