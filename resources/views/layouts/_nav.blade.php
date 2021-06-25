<nav class="container mx-auto text-gray-800 md:block md:py-8" x-data="{ nav: false, search: false, community: false, chat: false, settings: false }" @click.away="nav = false">
    <div class="w-full block md:flex md:items-center bg-white">
        <div class="w-full block md:flex md:items-center">
            <div class="flex justify-between items-center p-4">
                <a href="{{ route('home') }}" class="mr-4">
                    <img class="h-6 w-auto md:h-8" src="{{ asset('images/laravelio-logo.svg') }}" alt="" />
                </a>

                <div class="flex md:hidden">
                    <button @click="search = !search" :class="{ 'text-lio-500': search }">
                        <x-heroicon-o-search class="w-6 h-6 mr-4" />
                    </button>

                    <button @click="nav = !nav">
                        <x-heroicon-o-menu-alt-1 x-show="!nav" class="w-6 h-6" />
                    </button>

                    <button @click="nav = !nav" x-cloak>
                        <x-heroicon-o-x x-show="nav" class="w-6 h-6" />
                    </button>
                </div>
            </div>

            <div class="mt-2 md:mt-0 md:block border-b md:border-0" x-cloak :class="{ 'block': nav, 'hidden': !nav }">
                <ul class="md:flex px-4">
                    <li class="mb-6 md:mb-0 md:mr-4">
                        <a href="{{ route('forum') }}">
                            Forum
                        </a>
                    </li>

                    <li class="mb-6 md:mb-0 md:mr-4">
                        <a href="{{ route('articles') }}" >
                            Articles
                        </a>
                    </li>

                    <li class="mb-6 md:mb-0 md:mr-4">
                        <a href="https://paste.laravel.io">
                            Pastebin
                        </a>
                    </li>

                    <li class="mb-6 md:mb-0 md:mr-4">
                        <div @click.away="chat = false" class="relative">
                            <div>
                                <button @click="chat = !chat" class="mb-4 flex items-center md:mb-0">
                                    Chat
                                    <x-heroicon-s-chevron-down x-show="!chat" class="w-4 h-4 ml-1"/>
                                    <x-heroicon-s-chevron-left x-cloak x-show="chat" class="w-4 h-4 ml-1"/>
                                </button>
                            </div>
                            <div x-show="chat" x-cloak>
                                <ul class="ml-4 md:absolute md:flex md:flex-col md:ml-0 md:mt-2 md:w-36 md:rounded-md md:shadow-lg md:z-50 md:bg-white">
                                    <li class="mb-4 hover:bg-gray-100 md:mb-0 md:p-4">
                                        <a href="https://discord.gg/KxwQuKb">Discord</a>
                                    </li>

                                    <li class="mb-4 hover:bg-gray-100 md:mb-0 md:p-4">
                                        <a href="https://larachat.co">Larachat</a>
                                    </li>

                                    <li class="hover:bg-gray-100 md:p-4">
                                        <a href="https://webchat.freenode.net/?nick=laravelnewbie&channels=%23laravel&prompt=1">IRC</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <li class="mb-6 md:mb-0 md:mr-4">
                        <a href="https://laravelevents.com">
                            Events
                        </a>
                    </li>

                    <li class="mb-6 md:mb-0">
                        <div @click.away="community = false" class="relative" x-data="{ community: false }">
                            <button @click="community = !community" class="mb-4 flex items-center md:mb-0">
                                Community
                                <x-heroicon-s-chevron-down x-show="!community" class="w-4 h-4 ml-1"/>
                                <x-heroicon-s-chevron-left x-cloak x-show="community" class="w-4 h-4 ml-1"/>
                            </button>

                            <div x-show="community" x-cloak>
                                <ul class="ml-4 md:absolute md:flex md:flex-col md:ml-0 md:mt-2 md:w-36 md:rounded-md md:shadow-lg md:z-50 md:bg-white">
                                    <li class="mb-4 hover:bg-gray-100 md:mb-0 md:p-4">
                                        <a href="https://github.com/laravelio">Github</a>
                                    </li>
                                    
                                    <li class="mb-4 hover:bg-gray-100 md:mb-0 md:p-4">
                                        <a href="https://larachat.co">Twitter</a>
                                    </li>

                                    <li class="mb-4 hover:bg-gray-100 md:mb-0 md:p-4">
                                        <a href="https://laravel.com">Laravel</a>
                                    </li>

                                    <li class="mb-4 hover:bg-gray-100 md:mb-0 md:p-4">
                                        <a href="https://laracasts.com">Laracasts</a>
                                    </li>
                                    
                                    <li class="mb-4 hover:bg-gray-100 md:mb-0 md:p-4">
                                        <a href="https://laravel-news.com">Laravel News</a>
                                    </li>
                                    
                                    <li class="mb-4 hover:bg-gray-100 md:mb-0 md:p-4">
                                        <a href="https://www.laravelpodcast.com">Podcast</a>
                                    </li>
                                    
                                    <li class="hover:bg-gray-100 md:p-4">
                                        <a href="https://ecosystem.laravel.io">Ecosystem</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="w-full block md:flex md:items-center md:justify-end">
            <div class="md:block" x-cloak :class="{ 'block': search, 'hidden': !search }" @click.away="search = false">
                @include('_partials._search')
            </div>

            <ul class="block md:flex md:items-center" x-cloak :class="{ 'block': nav, 'hidden': !nav }">
                @if (Auth::guest())
                    <li class="w-full text-center p-2.5 md:ml-6 md:p-0">
                        <a href="{{ route('register') }}">
                            Register
                        </a>
                    </li>

                    <li>
                        <div class="hidden md:block ml-6">
                            <x-buttons.secondary-cta class="flex items-center" href="{{ route('login') }}">
                                <x-heroicon-o-user class="w-5 h-5 mr-1" />
                                Login
                            </x-buttons.secondary-cta>
                        </div>

                        <a href="{{ route('login') }}" class="block w-full text-center bg-lio-500 text-white p-2.5 md:hidden">
                            Login
                        </a>
                    </li>
                @else
                    <li class="relative p-4 md:p-0 md:ml-6" x-data="{ settings: false }">
                        <div class="flex items-center justify-center mb-4 md:mb-0">
                            <x-avatar :user="Auth::user()" class="h-8 w-8 mr-3" />

                            <div @click.away="settings = false">
                                <button @click="settings = !settings" class="flex items-center">
                                    {{ Auth::user()->name() }}
                                    <x-heroicon-s-chevron-down x-show="!settings" class="w-4 h-4 ml-1"/>
                                    <x-heroicon-s-chevron-left x-show="settings" class="w-4 h-4 ml-1"/>
                                </button>
                            </div>
                        </div>

                        <div x-show="settings" x-cloak>
                            <ul class="flex flex-col items-center md:absolute md:items-stretch md:ml-0 md:mt-2 md:w-36 md:rounded-md md:shadow-lg md:z-50 md:bg-white">
                                <li class="mb-4 hover:bg-gray-100 md:mb-0 md:p-4">
                                    <a href="{{ route('dashboard') }}">
                                        Dashboard
                                    </a>
                                </li>

                                <li class="mb-4 hover:bg-gray-100 md:mb-0 md:p-4">
                                    <a href="{{ route('profile', Auth::user()->username()) }}">
                                        Your Profile
                                    </a>
                                </li>

                                <li class="mb-4 hover:bg-gray-100 md:mb-0 md:p-4">
                                    <a href="{{ route('user.articles') }}">
                                        Your Articles
                                    </a>
                                </li>

                                <li class="mb-4 hover:bg-gray-100 md:mb-0 md:p-4">
                                    <a href="{{ route('settings.profile') }}">
                                        Settings
                                    </a>
                                </li>

                                @can(App\Policies\UserPolicy::ADMIN, App\Models\User::class)
                                    <li class="mb-4 hover:bg-gray-100 md:mb-0 md:p-4 md:border-t md:border-b">
                                        <a href="{{ route('admin') }}">
                                            Admin
                                        </a>
                                    </li>
                                @endcan

                                <li class="mb-4 hover:bg-gray-100 md:mb-0 md:p-4">
                                    <a href="{{ route('logout') }}">
                                        Sign out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>