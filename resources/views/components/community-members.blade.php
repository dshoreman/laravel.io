<div class="flex flex-col w-full">
    <div class="flex" style="margin-left: 134px;">
        @foreach ($members->first() as $member)
            <div x-data="{ open: false }" class="flex-shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2">
                <x-stat-popout 
                    x-cloak 
                    x-show="open" 
                    class="w-64 absolute -mt-40 -ml-20"
                    :user="$member"
                />

                <x-avatar 
                    :user="$member" 
                    class="inset-0 w-14 h-14 md:w-20 md:h-20 rounded-full"
                    x-on:mouseover="open = true"
                    x-on:mouseout="open = false"
                />
            </div>
        @endforeach
    </div>

    <div class="flex" style="margin-left: 71px;">
        @foreach ($members[1] as $member)
            <div x-data="{ open: false }" class="flex-shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2">
                <x-stat-popout 
                    x-cloak 
                    x-show="open" 
                    class="w-64 absolute -mt-40 -ml-20"
                    :user="$member"
                />

                <x-avatar 
                    :user="$member" 
                    class="inset-0 w-14 h-14 md:w-20 md:h-20 rounded-full"
                    x-on:mouseover="open = true"
                    x-on:mouseout="open = false"
                />
            </div>
        @endforeach
    </div>

    <div class="flex">
        @foreach ($members[2] as $member)
            <div x-data="{ open: false }" class="flex-shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2">
                <x-stat-popout 
                    x-cloak 
                    x-show="open" 
                    class="w-64 absolute -mt-40 -ml-20"
                    :user="$member"
                />

                <x-avatar 
                    :user="$member" 
                    class="inset-0 w-14 h-14 md:w-20 md:h-20 rounded-full"
                    x-on:mouseover="open = true"
                    x-on:mouseout="open = false"
                />
            </div>
        @endforeach
    </div>

    <div class="flex" style="margin-left: 71px;">
        @foreach ($members[3] as $member)
            <div x-data="{ open: false }" class="flex-shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2">
                <x-stat-popout 
                    x-cloak 
                    x-show="open" 
                    class="w-64 absolute -mt-40 -ml-20"
                    :user="$member"
                />

                <x-avatar 
                    :user="$member" 
                    class="inset-0 w-14 h-14 md:w-20 md:h-20 rounded-full"
                    x-on:mouseover="open = true"
                    x-on:mouseout="open = false"
                />
            </div>
        @endforeach
    </div>

    <div class="flex" style="margin-left: 134px;">
        @foreach ($members[4] as $member)
            <div x-data="{ open: false }" class="flex-shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2">
                <x-stat-popout 
                    x-cloak 
                    x-show="open" 
                    class="w-64 absolute -mt-40 -ml-20"
                    :user="$member"
                />
                
                <x-avatar 
                    :user="$member" 
                    class="inset-0 w-14 h-14 md:w-20 md:h-20 rounded-full"
                    x-on:mouseover="open = true"
                    x-on:mouseout="open = false"
                />
            </div>
        @endforeach
    </div>
</div>
