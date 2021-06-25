<div class="flex flex-col w-full" x-data="{ active: false }">
    <div class="flex" style="margin-left: 134px;">
        @foreach ($members->first() as $member)
            <div class="flex-shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                <x-stat-popout 
                    x-cloak 
                    x-show="active == '{{ $member->id }}'" 
                    class="w-64 absolute -mt-40 -ml-20"
                    :user="$member"
                />

                <x-avatar 
                    :user="$member" 
                    class="inset-0 w-14 h-14 md:w-20 md:h-20 rounded-full"
                    x-bind:class="{ 'opacity-50': active && active != '{{ $member->id }}' }"
                    x-on:mouseover="active = {{ $member->id }}"
                    x-on:mouseout="active = false"
                />
            </div>
        @endforeach
    </div>

    <div class="flex" style="margin-left: 71px;">
        @foreach ($members[1] as $member)
            <div class="flex-shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                <x-stat-popout 
                    x-cloak 
                    x-show="active == '{{ $member->id }}'" 
                    class="w-64 absolute -mt-40 -ml-20"
                    :user="$member"
                />

                <x-avatar 
                    :user="$member" 
                    class="inset-0 w-14 h-14 md:w-20 md:h-20 rounded-full"
                    x-bind:class="{ 'opacity-50': active && active != '{{ $member->id }}' }"
                    x-on:mouseover="active = {{ $member->id }}"
                    x-on:mouseout="active = false"
                />
            </div>
        @endforeach
    </div>

    <div class="flex">
        @foreach ($members[2] as $member)
            <div class="flex-shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                <x-stat-popout 
                    x-cloak 
                    x-show="active == '{{ $member->id }}'" 
                    class="w-64 absolute -mt-40 -ml-20"
                    :user="$member"
                />

                <x-avatar 
                    :user="$member" 
                    class="inset-0 w-14 h-14 md:w-20 md:h-20 rounded-full"
                    x-bind:class="{ 'opacity-50': active && active != '{{ $member->id }}' }"
                    x-on:mouseover="active = {{ $member->id }}"
                    x-on:mouseout="active = false"
                />
            </div>
        @endforeach
    </div>

    <div class="flex" style="margin-left: 71px;">
        @foreach ($members[3] as $member)
            <div class="flex-shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                <x-stat-popout 
                    x-cloak 
                    x-show="active == '{{ $member->id }}'" 
                    class="w-64 absolute -mt-40 -ml-20"
                    :user="$member"
                />

                <x-avatar 
                    :user="$member" 
                    class="inset-0 w-14 h-14 md:w-20 md:h-20 rounded-full"
                    x-bind:class="{ 'opacity-50': active && active != '{{ $member->id }}' }"
                    x-on:mouseover="active = {{ $member->id }}"
                    x-on:mouseout="active = false"
                />
            </div>
        @endforeach
    </div>

    <div class="flex" style="margin-left: 134px;">
        @foreach ($members[4] as $member)
            <div class="flex-shrink-0 w-14 h-14 md:w-20 md:h-20 mr-8 my-2 cursor-pointer">
                <x-stat-popout 
                    x-cloak 
                    x-show="active == '{{ $member->id }}'" 
                    class="w-64 absolute -mt-40 -ml-20"
                    :user="$member"
                />

                <x-avatar 
                    :user="$member" 
                    class="inset-0 w-14 h-14 md:w-20 md:h-20 rounded-full"
                    x-bind:class="{ 'opacity-50': active && active != '{{ $member->id }}' }"
                    x-on:mouseover="active = {{ $member->id }}"
                    x-on:mouseout="active = false"
                />
            </div>
        @endforeach
    </div>
</div>
