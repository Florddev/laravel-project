<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/iconoir-icons/iconoir@main/css/iconoir.css" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen font-sans antialiased bg-base-300 text-base-content">
{{--        <header class="shadow">--}}
{{--            <div class="max-w-7xl mx-auto py-6 px-8 sm:px-6 lg:px-8">--}}
{{--                OnlyFun--}}
{{--            </div>--}}
{{--        </header>--}}
        <main class="max-w-7xl mx-auto drawer lg:drawer-open">
            <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
            <div class="drawer-content flex justify-between">

                <div class="w-full flex flex-col">
                    <div role="tablist" class="tabs flex tabs-bordered w-full">
                        <a role="tab" class="p-4 h-fit tab tab-active w-full border-primary">Pour vous</a>
                        <a role="tab" class="p-4 h-fit tab w-full">Abonnements</a>
                    </div>
                    <label for="my-drawer-2" class="btn btn-primary drawer-button lg:hidden">
                        Open drawer
                    </label>
                    <div class="flex items-center gap-3 border-b border-base-100 w-full p-4">
                        <div class="avatar">
                            <div class="mask mask-squircle h-12 w-12">
                                <img
                                    src="https://img.daisyui.com/tailwind-css-component-profile-2@56w.png"
                                    alt="Avatar Tailwind CSS Component" />
                            </div>
                        </div>
                        <input type="text" placeholder="Poster un message" class="input input-lg input-ghost w-full" />
                    </div>
                    <div>
                        {{-- Exemple de poste --}}
                        <div class="flex gap-3 border-b border-base-100 transition-colors w-full p-4 bg-base-300 hover:bg-base-200">
                            <div class="avatar">
                                <div class="mask mask-squircle h-12 w-12">
                                    <img
                                        src="https://img.daisyui.com/tailwind-css-component-profile-2@56w.png"
                                        alt="Avatar Tailwind CSS Component" />
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="flex gap-2 items-center">
                                    <div class="font-bold">Hart Hagerty</div>
                                    <div class="text-sm opacity-50">@hhagertyy</div>
                                    <div class="text-sm opacity-50">21h</div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur delectus deleniti dolorem libero quam quia repudiandae soluta sunt ut, vel? Ad aspernatur doloribus ducimus maiores, necessitatibus odio omnis quam quos!</p>
                            </div>
                        </div>
                        <livewire:new-post></livewire:new-post>
                        {{-- Reste de la page --}}
                        {{ $slot }}
                    </div>
                </div>
                <div class="w-80 border-l border-base-100 flex-col p-4">
                    <label class="input input-bordered flex items-center bg-base-300 gap-2 w-full">
                        <input type="text" class="grow border-0 focus:border-0 w-full" placeholder="Search" />
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 16 16"
                            fill="currentColor"
                            class="h-4 w-4 opacity-70">
                            <path
                                fill-rule="evenodd"
                                d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"
                                clip-rule="evenodd" />
                        </svg>
                    </label>
                </div>
            </div>
            <div class="drawer-side fixed border-r border-base-100">
                <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
                <div class="flex flex-col justify-between w-72 min-h-screen p-4">
                    <ul class="menu menu-lg text-base-content min-h-full">
                        <li><a>OnlyFun</a></li>
                        <li><a><i class="text-2xl iconoir-home-simple"></i> Home</a></li>
                        <li><a><i class="text-2xl iconoir-search"></i> Explore</a></li>
                        <li><a><i class="text-2xl iconoir-bell"></i> Notification</a></li>
                        <li><a><i class="text-2xl iconoir-message-text"></i> Messages</a></li>
                        <li><a><i class="text-2xl iconoir-user"></i> Profile</a></li>
                        <li><a><i class="text-2xl iconoir-settings"></i> Paramètres</a></li>
                        <li class="p-4"><button class="btn btn-block btn-primary">Poster</button></li>
                    </ul>
                    <ul class="menu text-base-content min-h-full">
                        <li>
                            <a class="flex items-center gap-3">
                                <div class="avatar">
                                    <div class="mask mask-squircle h-12 w-12">
                                        <img
                                            src="https://img.daisyui.com/tailwind-css-component-profile-2@56w.png"
                                            alt="Avatar Tailwind CSS Component" />
                                    </div>
                                </div>
                                <div>
                                    <div class="font-bold">{{ Auth::user()->name }}</div>
                                    <div class="text-sm opacity-50">{{ Auth::user()->email }}</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </main>
    </body>
</html>
