<nav class="container mx-auto py-8 text-gray-800">
    <div class="w-full flex items-center">
        <div class="w-full flex items-center">
            <a href="{{ route('home') }}" class="mr-4">
                <img class="hidden lg:block h-8 w-auto" src="{{ asset('images/laravelio-logo.svg') }}" alt="" />
            </a>

            <ul class="flex px-4">
                <li>
                    <a href="{{ route('forum') }}" class="mr-4">
                        Forum
                    </a>
                </li>

                <li>
                    <a href="{{ route('articles') }}" class="mr-4">
                        Articles
                    </a>
                </li>

                <li>
                    <a href="https://paste.laravel.io" class="mr-4">
                        Pastebin
                    </a>
                </li>

                <li>
                    <div @click.away="open = false" class="relative" x-data="{ open: false }">
                        <div class="mr-4">
                            <button @click="open = !open" class="flex items-center">
                                Chat
                                <x-heroicon-s-chevron-down x-show="!open" class="w-4 h-4 ml-1"/>
                                <x-heroicon-s-chevron-left x-show="open" class="w-4 h-4 ml-1"/>
                            </button>
                        </div>
                        <div x-show="open" x-cloak>
                            <div class="absolute flex flex-col mt-2 w-36 rounded-md shadow-lg z-50 bg-white">
                                <a href="https://discord.gg/KxwQuKb" class="p-4 hover:bg-gray-100">Discord</a>
                                <a href="https://larachat.co" class="p-4 hover:bg-gray-100">Larachat</a>
                                <a href="https://webchat.freenode.net/?nick=laravelnewbie&channels=%23laravel&prompt=1" class="p-4 hover:bg-gray-100">IRC</a>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <a href="https://laravelevents.com" class="mr-4">
                        Events
                    </a>
                </li>

                <li>
                    <div @click.away="open = false" class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="flex items-center">
                            Community
                            <x-heroicon-s-chevron-down x-show="!open" class="w-4 h-4 ml-1"/>
                            <x-heroicon-s-chevron-left x-show="open" class="w-4 h-4 ml-1"/>
                        </button>

                        <div x-show="open" x-cloak>
                            <div class="absolute flex flex-col mt-2 w-36 rounded-md shadow-lg z-50 bg-white">
                                <a href="https://github.com/laravelio" class="p-4 hover:bg-gray-100">Github</a>
                                <a href="https://larachat.co" class="p-4 hover:bg-gray-100">Twitter</a>
                                <a href="https://laravel.com" class="p-4 hover:bg-gray-100">Laravel</a>
                                <a href="https://laracasts.com" class="p-4 hover:bg-gray-100">Laracasts</a>
                                <a href="https://laravel-news.com" class="p-4 hover:bg-gray-100">Laravel News</a>
                                <a href="https://www.laravelpodcast.com" class="p-4 hover:bg-gray-100">Podcast</a>
                                <a href="https://ecosystem.laravel.io" class="p-4 hover:bg-gray-100">Ecosystem</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="w-full flex items-center justify-end">
            @include('_partials._search')

            <ul class="flex">
                @if (Auth::guest())
                    <li>
                        <a href="{{ route('register') }}" class="ml-6">
                            Register
                        </a>
                    </li>

                    <li>
                        <div class="ml-6">
                            <x-buttons.secondary-cta class="flex items-center" href="{{ route('login') }}">
                                <x-heroicon-o-user class="w-5 h-5 mr-1" />
                                Login
                            </x-buttons.secondary-cta>
                        </div>
                    </li>
                @else
                    <li class="flex items-center">
                        <x-avatar :user="Auth::user()" class="h-8 w-8 mr-3 ml-6" />

                        <div @click.away="open = false" class="relative" x-data="{ open: false }">
                            <button @click="open = !open" class="flex items-center">
                                {{ Auth::user()->name() }}
                                <x-heroicon-s-chevron-down x-show="!open" class="w-4 h-4 ml-1"/>
                                <x-heroicon-s-chevron-left x-show="open" class="w-4 h-4 ml-1"/>
                            </button>

                            <div x-show="open" x-cloak>
                                <div class="absolute flex flex-col mt-2 w-36 rounded-md shadow-lg z-50 bg-white">
                                    <a href="{{ route('dashboard') }}" class="p-4 hover:bg-gray-100">
                                        Dashboard
                                    </a>

                                    <a href="{{ route('profile', Auth::user()->username()) }}" class="p-4 hover:bg-gray-100">
                                        Your Profile
                                    </a>

                                    <a href="{{ route('user.articles') }}" class="p-4 hover:bg-gray-100">
                                        Your Articles
                                    </a>

                                    <a href="{{ route('settings.profile') }}" class="p-4 hover:bg-gray-100">
                                        Settings
                                    </a>

                                    @can(App\Policies\UserPolicy::ADMIN, App\Models\User::class)
                                        <a href="{{ route('admin') }}" class="p-4 hover:bg-gray-100 border-t border-b">
                                            Admin
                                        </a>
                                    @endcan

                                    <a href="{{ route('logout') }}" class="p-4 hover:bg-gray-100">
                                        Sign out
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>