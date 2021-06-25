@extends('layouts.base', ['bodyClass' => 'home', 'disableFooterAds' => true])

@section('body')
    @include('layouts._alerts')

    <!-- Head section -->
    <section class="overflow-x-hidden">
        <div class="container mx-auto mt-6 md:my-20">
            <div class="flex flex-col items-center mx-4 md:flex-row md:mx-20">
                <div class="w-full mb-8 md:w-1/2 md:mb-0">
                    <h1 class="text-3xl md:text-6xl font-bold text-gray-900 leading-tight mb-3">
                        The Laravel Community Portal
                    </h1>
                    <div class="mb-5">
                        <p class="text-gray-800 text-lg leading-8 font-medium">
                            The Laravel portal for problem solving, knowledge sharing<br>
                            and community building. Join <x-accent-text>{{ $totalUsers }}</x-accent-text> other artisans.
                        </p>
                    </div>

                    <div>
                        @if (Auth::guest())
                            <x-buttons.primary-cta href="{{ route('register') }}" class="w-full mb-3 md:w-auto md:mr-2">
                                Join the community
                            </x-buttons.primary-cta>

                            <x-buttons.secondary-cta href="{{ route('forum') }}" class="w-full md:w-auto">
                                Visit the forum
                            </x-buttons.secondary-cta>
                        @else
                            <x-buttons.primary-cta href="{{ route('threads.create') }}" class="w-full mb-3 md:w-auto md:mr-2">
                                Start a Thread
                            </x-buttons.primary-cta>

                            <x-buttons.primary-cta href="{{ route('articles.create') }}" class="w-full mb-3 md:w-auto md:mr-2">
                                Share an Article
                            </x-buttons.primary-cta>
                        @endif
                    </div>
                </div>

                <div class="md:w-1/2">
                    <x-community-members :members="$communityMembers" />
                </div>
            </div>
        </div>
    </section>
    <!-- /Head section -->

    <!-- Banner ad -->
    <section class="container mx-auto my-12 md:my-20">
        <div class="px-4 md:mx-48 md:px-0">
            @include('layouts._ads._footer')
        </div>
    </section>
    <!-- /Banner ad -->

    <!-- Search -->
    <section class="mt-8 md:my-16">
        <div class="bg-lio-500 text-white transform -skew-y-1">
            <div class="container mx-auto transform skew-y-1">
                <div class="flex flex-col items-center py-10 text-center md:py-20">
                    <div class="w-full px-4 md:w-2/5 md:px-0">
                        <div class="mb-8">
                            <h2 class="text-3xl md:text-4xl font-bold mb-3">Looking for a solution?</h2>
                            <p class="text-lg md:text-xl opacity-80">Search the forum for the answer to your question</p>
                        </div>

                        <div class="mb-10">
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <x-heroicon-o-search class="w-4 h-4 text-gray-900" />
                                </div>
                                <input type="search" placeholder="Search here for threads" class="p-4 pl-10 text-gray-600 rounded w-full border-gray-100" />
                            </div>
                        </div>

                        <div class="text-lg">
                            <p>
                                Can't find what you're looking for? 
                                <a href="" class="border-b border-white pb-1 block md:inline">
                                    Create a new thread
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Search -->

    <!-- Help others -->
    <section class="mt-14 md:my-16 container mx-auto">
        <div class="md:mx-20 overflow-x-hidden">
            <div class="flex flex-col md:flex-row items-center mb-4 px-4 md:mb-16">
                <h2 class="w-full text-3xl font-bold text-gray-900 md:w-1/2 md:text-4xl">Or you can help others</h2>
                <p class="w-full text-gray-800 text-lg md:w-1/2">By joining our platform, you can take a look at the latest unresolved threads</p>
            </div>

            <div class="flex overflow-x-scroll mb-4 -mr-4 p-4 md:mb-10">

                @foreach ($latestThreads as $thread)
                    <div class="flex-shrink-0 w-11/12 md:w-1/3">
                        <x-threads.summary
                            :thread="$thread"
                        />
                    </div>
                @endforeach

            </div>

            <div class="flex justify-center px-4">
                <x-buttons.primary-cta href="{{ route('forum') }}" class="w-full md:w-auto">
                    View all threads
                </x-buttons.primary-cta>
            </div>
        </div>
    </section>
    <!-- /Help others -->

    <!-- Laravel.io in numbers -->
    <section class="mt-14 container mx-auto md:mb-44">
        <h2 class="text-4xl leading-tight font-bold text-center text-gray-900 mb-6 md:mb-12">Laravel.io in numbers</h2>

        <div class="flex flex-col md:mb-10 mx-4 md:flex-row md:mx-20">
            <div class="w-full flex-shrink-0 md:w-1/3">
                <x-number-block title="Users" :total="$totalUsers" :background="asset('images/users.png')" />
            </div>

            <div class="w-full flex-shrink-0 md:w-1/3">
                <x-number-block title="Threads" :total="$totalThreads" :background="asset('images/threads.png')" />
            </div>

            <div class="w-full flex-shrink-0 md:w-1/3">
                <x-number-block title="Replies" :total="$totalReplies" :background="asset('images/replies.png')" />
            </div>
        </div>
    </section>
    <!-- /Laravel.io in numbers -->

    <!-- Popular articles -->
    <section class="mt-14 container mx-auto md:mb-40">
        <div class="mx-4 md:mx-20">
            <div class="flex flex-col items-center mb-8 md:flex-row md:mb-16">
                <h2 class="w-full text-3xl font-bold text-gray-900 mb-2 md:text-4xl md:w-1/2 md:mb-0">Popular articles</h2>
                <p class="w-full text-gray-800 text-lg md:w-1/2">Have a look a the latest shared articles by our community members</p>
            </div>

            <div class="flex flex-col md:flex-row md:mb-16">
                <div class="w-full md:w-1/3 md:mr-5">
                    <x-articles.summary 
                        image="https://images.unsplash.com/photo-1541280910158-c4e14f9c94a3?auto=format&fit=crop&w=1000&q=80" 
                        :article="$latestArticles->first()"
                        is-featured
                    />
                </div>

                <div class="w-full md:w-1/3 md:mr-5">
                    <x-articles.summary 
                        image="https://images.unsplash.com/photo-1584824486516-0555a07fc511?auto=format&fit=crop&w=1000&q=80" 
                        :article="$latestArticles->get(1)"
                        is-featured
                    />
                </div>

                <div class="w-full md:w-1/3">
                    <div class="md:border-b-2 md:border-gray-200 md:h-72">
                        <x-articles.summary  :article="$latestArticles->get(2)" />
                    </div>

                    <div class="md:pt-6">
                        <x-articles.summary :article="$latestArticles->get(3)" />
                    </div>
                </div>
            </div>

            <div class="flex justify-center">
                <x-buttons.primary-cta href="{{ route('articles') }}" class="w-full md:w-auto">
                    View all articles
                </x-buttons.primary-cta>
            </div>
        </div>
    </section>
    <!-- /Popular articles -->
@endsection