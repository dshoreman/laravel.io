<section class="mb-14 md:mb-40">
    @include('layouts._sponsors')
</section>

<div class="bg-gray-900 text-white">
    <div class="container mx-auto pt-7 pb-8 md:pt-20 ">
        <div class="mx-4 md:mx-20">
            <div class="flex flex-col pb-8 mb-8 border-b md:pb-16 border-gray-800 md:flex-row">
                <div class="w-full mb-6 md:w-2/5 md:pr-20 md:mb-0">
                    <a href="" class="block mb-5">
                        <img src="{{ asset('images/laravelio-logo-white.svg') }}" />
                    </a>
                    <p class="text-gray-100 md:leading-loose">
                        The Laravel portal for problem solving,
                        knowledge sharing and community
                        building. Join 46,564 other artisans.
                    </p>
                </div>

                <div class="md:w-full md:flex md:justify-between">
                    <div class="w-full mb-6 md:mb-0">
                        <div>
                            <h6 class="text-lg mb-4 md:mb-6">
                                Laravel.io
                            </h6>

                            <div class="flex flex-wrap md:flex-col md:flex-no-wrap">
                                <a href="" class="w-1/2 text-gray-400 mb-4 md:mb-6">
                                    Forum
                                </a>

                                <a href="" class="w-1/2 text-gray-400 mb-4 md:mb-6">
                                    Articles
                                </a>

                                <a href="" class="w-1/2 text-gray-400 mb-4 md:mb-6">
                                    Pastebin
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="w-full mb-6 md:mb-0">
                        <div>
                            <h6 class="text-lg mb-4 md:mb-6">
                                Socials
                            </h6>

                            <div class="flex flex-wrap md:flex-col md:flex-no-wrap">
                                <a href="" class="w-1/2 text-gray-400 mb-4 md:mb-6">
                                    <x-icon-twitter class="text-white w-4 h-4 inline mr-3.5"/>
                                    Twitter
                                </a>

                                <a href="" class="w-1/2 text-gray-400 mb-4 md:mb-6">
                                    <x-icon-github class="text-white w-4 h-4 inline mr-3.5"/>
                                    GitHub
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="w-full">
                        <div>
                            <h6 class="text-lg mb-6">
                                The community
                            </h6>

                            <div class="flex flex-col">
                                <div class="flex mb-4 md:mb-6">
                                    <a href="https://laravel.com" class="w-1/2 text-gray-400">
                                        <img src="{{ asset('images/laravel.png') }}" alt="Laravel" class="w-4 h-4 inline mr-2" />
                                        Laravel
                                    </a>

                                    <a href="https://laravel-news.com" class="w-1/2 text-gray-400">
                                        <img src="{{ asset('images/laravel-news.png') }}" alt="Laravel News" class="w-4 h-4 inline mr-2" />
                                        Laravel News
                                    </a>
                                </div>

                                <div class="flex">
                                    <a href="https://laracasts.com" class="w-1/2 text-gray-400">
                                        <img src="{{ asset('images/laracasts.png') }}" alt="Laracasts" class="w-4 h-4 inline mr-2" />
                                        Laracasts
                                    </a>

                                    <a href="https://www.laravelpodcast.com" class="w-1/2 text-gray-400">
                                        <img src="{{ asset('images/podcast.png') }}" alt="Laravel Podcast" class="w-4 h-4 inline mr-2" />
                                        Laravel Podcast
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-gray-100 flex flex-col md:flex-row">
                <span class="mb-5 md:mb-0 md:mr-5">© 2021 Laravel.io - All rights reserved.</span>

                <div class="flex flex-wrap md:block">
                    <a href="https://laravel.io/terms" class="w-1/2 mb-4 md:w-full md:mb-0 md:mr-8">Terms of service</a>
                    <a href="https://laravel.io/privacy" class="w-1/2 mb-4 md:w-full md:mb-0 md:mr-8">Privacy policy</a>
                    <a href="https://github.com/sponsors/laravelio" class="w-1/2 md:w-full md:mb-0">Advertise</a>
                </div>
            </div>
        </div>
    </div>
</div>
