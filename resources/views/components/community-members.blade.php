<div class="flex flex-col w-full">
    <div class="flex" style="margin-left: 134px;">

        @for ($i = 1; $i < 20; $i++)
            <div x-data="{ open: false }" class="flex-shrink-0 w-20 h-20 mr-8 my-2">
                <x-stat-popout x-cloak x-show="open" class="w-64 absolute -mt-40 -ml-20" />
                <img 
                    class="inset-0 w-20 h-20 rounded-full" 
                    src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-0.3.5&q=80&fm=jpg&crop=faces&fit=crop&h=200&w=200&s=73a9df4b7bd1b330db1e903e08575ec1"
                    x-on:mouseover="open = true"
                    x-on:mouseout="open = false"
                />
            </div>
        @endfor

    </div>

    <div class="flex" style="margin-left: 71px;">
        @for ($i = 1; $i < 20; $i++)
            <div x-data="{ open: false }" class="flex-shrink-0 w-20 h-20 mr-8 my-2">
                <x-stat-popout x-cloak x-show="open" class="w-64 absolute -mt-40 -ml-20" />
                <img 
                    class="inset-0 w-20 h-20 rounded-full" 
                    src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-0.3.5&q=80&fm=jpg&crop=faces&fit=crop&h=200&w=200&s=73a9df4b7bd1b330db1e903e08575ec1"
                    x-on:mouseover="open = true"
                    x-on:mouseout="open = false"
                />
            </div>
        @endfor
    </div>

    <div class="flex">
        @for ($i = 1; $i < 20; $i++)
            <div x-data="{ open: false }" class="flex-shrink-0 w-20 h-20 mr-8 my-2">
                <x-stat-popout x-cloak x-show="open" class="w-64 absolute -mt-40 -ml-20" />
                <img 
                    class="inset-0 w-20 h-20 rounded-full" 
                    src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-0.3.5&q=80&fm=jpg&crop=faces&fit=crop&h=200&w=200&s=73a9df4b7bd1b330db1e903e08575ec1"
                    x-on:mouseover="open = true"
                    x-on:mouseout="open = false"
                />
            </div>
        @endfor
    </div>

    <div class="flex" style="margin-left: 71px;">
        @for ($i = 1; $i < 20; $i++)
            <div x-data="{ open: false }" class="flex-shrink-0 w-20 h-20 mr-8 my-2">
                <x-stat-popout x-cloak x-show="open" class="w-64 absolute -mt-40 -ml-20" />
                <img 
                    class="inset-0 w-20 h-20 rounded-full" 
                    src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-0.3.5&q=80&fm=jpg&crop=faces&fit=crop&h=200&w=200&s=73a9df4b7bd1b330db1e903e08575ec1"
                    x-on:mouseover="open = true"
                    x-on:mouseout="open = false"
                />
            </div>
        @endfor
    </div>

    <div class="flex" style="margin-left: 134px;">
        @for ($i = 1; $i < 20; $i++)
            <div x-data="{ open: false }" class="flex-shrink-0 w-20 h-20 mr-8 my-2">
                <x-stat-popout x-cloak x-show="open" class="w-64 absolute -mt-40 -ml-20" />
                <img 
                    class="inset-0 w-20 h-20 rounded-full" 
                    src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-0.3.5&q=80&fm=jpg&crop=faces&fit=crop&h=200&w=200&s=73a9df4b7bd1b330db1e903e08575ec1"
                    x-on:mouseover="open = true"
                    x-on:mouseout="open = false"
                />
            </div>
        @endfor
    </div>
</div>
