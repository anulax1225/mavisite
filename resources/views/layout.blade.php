<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="icon" sizes="16x16" href="/img/logo.svg">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <title>Ma Visite 360 - {{ $title }}</title>
        @vite("resources/js/app.js")
        @vite("resources/css/app.css")
    </head>
    <body class="relative w-screen h-screen antialiased font-robo bg-gray-850 dark:bg-gray-50 -z-10 mt-16">
        <!--<img src="/img/lightsource.png" class="w-full absolute top-0 right-0 left-0 -z-10">-->
        <nav class="fixed right-0 left-0 top-0 h-16 z-50 w-screen">
            <div class="relative w-full h-full flex items-center justify-center bg-gradient-to-r from-gray-750 dark:from-gray-0 via-gray-600 dark:via-gray-300 to-gray-750 dark:to-gray-0 pb-[2px]">
                <div class="w-full h-full desktop:px-[12.5%] laptop:px-[5%] bg-gray-750 dark:bg-white">
                    <div class="w-full h-full flex justify-between">    
                        <div class="flex items-center h-full">
                            <a href="/" class="h-full"><img src="/img/logo-mavisite360.png" class="h-full hover:scale-105 laptop:mr-2 p-3"></a>
                            <h5 class="laptop:text-lg text-sm text-white cursor-pointer bg-gradient-to-tr from-orange-400 to-orange-600 rounded-lg laptop:px-4 px-3 laptop:py-0 py-1 font-semibold">{{ $title }}</h5>
                        </div>
                        <div class="items-center h-full laptop:flex hidden">
                            <a href="/" class="flex items-center">
                                <h1 class="mr-4 text-xl dark:text-gray-400 font-bold
                                hover:text-white dark:hover:text-gray-600 hover:scale-110">home</h1>
                            </a>
                            <a href="/demo" class="flex items-center">
                                <h1 class="font-bold mr-4 text-xl dark:text-gray-400
                                hover:text-white dark:hover:text-gray-600 hover:scale-110">demo</h1>
                            </a>
                            <a href="#contact" class="flex items-center">  
                                <h1 class="font-bold mr-7 text-xl dark:text-gray-400
                                hover:text-white dark:hover:text-gray-600 hover:scale-110">contact</h1>
                            </a>
                            <div class="flex items-center h-fit py-[8px] pl-5 border-l border-gray-700">
                                <button id="btn-theme" class="relative group flex items-center justify-center mr-6" 
                                onclick="window.themeToggle()">
                                    <img src="/img/light-2.svg" class="dark:w-[1.4rem] w-[1.6rem] hover:scale-105 invert dark:invert-0">
                                </button>
                                <img src="/img/instagram.svg" class="w-[1.6rem] hover:scale-105 invert dark:invert-0 mr-3">
                                <img src="/img/twitter.svg" class="w-[1.6rem] hover:scale-105 invert dark:invert-0">
                            </div>
                        </div>
                        <div class="laptop:hidden flex h-full py-3 px-2 cursor-pointer" onclick="document.querySelector('#panel-mobile').classList.toggle('hidden')">
                            <img src="/img/menu.svg" class="h-full hover:scale-105 invert dark:invert-0">
                        </div>
                    </div>
                    <div id="panel-mobile" class="laptop:hidden hidden absolute top-full right-0 left-0 bg-gray-750 dark:bg-white 
                        border-b border-gray-650 dark:border-gray-500">
                        <div class="laptop:items-center h-full flex flex-col pt-2">
                            <a href="/" class="flex items-center px-2 focus:scale-105 focus:text-white dark:focus:text-gray-600">
                                <img src="/img/home.svg" class="w-[1.6rem] invert dark:invert-0 mr-3">
                                <h1 class="text-xl dark:text-gray-900 font-bold">home</h1>
                            </a>
                            <a href="/demo" class="flex items-center px-2 mt-2 focus:scale-105 focus:text-white dark:focus:text-gray-600">
                                <img src="/img/test.svg" class="w-[1.6rem] invert dark:invert-0 mr-3">
                                <h1 class="font-bold text-xl dark:text-gray-900">demo</h1>
                            </a>
                            <a href="#contact" class="flex items-center px-2 mt-2 focus:scale-105 focus:text-white dark:focus:text-gray-600">
                                <img src="/img/contact.svg" class="w-[1.6rem] invert dark:invert-0 mr-3">
                                <h1 class="font-bold text-xl dark:text-gray-900">contact</h1>
                            </a>
                            <div class="flex items-center h-fit mt-5 px-5 py-2 border-t border-gray-700 dark:border-gray-300 justify-end">
                                <button id="btn-theme" class="relative group flex items-center justify-center mr-6" 
                                onclick="window.themeToggle()">
                                    <img src="/img/light-2.svg" class="dark:w-[1.4rem] w-[1.6rem] hover:scale-105 invert dark:invert-0">
                                </button>
                                <img src="/img/instagram.svg" class="w-[1.6rem] hover:scale-105 invert dark:invert-0 mr-2">
                                <img src="/img/twitter.svg" class="w-[1.6rem] hover:scale-105 invert dark:invert-0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="relative w-full z-10">
            @yield("content")
            <footer class="w-full bg-gray-800 dark:bg-white">
                <div class="desktop:w-3/4 laptop:w-[90%] w-full px-3 mx-auto flex flex-col items-center justify-between">
                    <div class="w-full mt-5 flex laptop:flex-row flex-col laptop:items-center">
                        <div id="contact" class="laptop:w-1/3 w-full mb-10">
                            <h2 class="font-semibold text-[1.7rem] border-b-2 border-gray-750 laptop:w-3/4 pr-20 mb-2">Nous contacter</h2>
                            <div class="w-full flex">
                                <div class="laptop:px-3">
                                    <h4 class="font-semibold mb-1">+41 78 694 09 79</h4>
                                    <h4 class="font-semibold mb-1">contact@mv360.ch</h4>
                                    <h4 class="font-semibold">Rue de la Maladière 80</h4>
                                </div>
                                <a target="_blank" href="mailto:contact@mv360.ch?subject=Mail de contact de &#34;Ma Visite 360&#34;" 
                                class="h-fit rounded-lg laptop:text-sm text-[0.75rem] hover:scale-105 bg-orange-600 px-4 py-2 text-white font-bold mb-2">
                                    Envoyer un mail
                                </a>
                            </div>
                        </div>
                        <div class="flex items-start justify-evenly laptop:w-1/3 w-full mb-10">
                            <div class="hover:social-icon-in social-icon-out p-2 border border-gray-750 rounded-lg">
                                <img src="/img/linkedin.svg" class="w-[2rem] brightness-0 invert dark:invert-0">
                            </div>
                            <div class="hover:social-icon-in social-icon-out p-2 border border-gray-750 rounded-lg">
                                <img src="/img/discord.svg" class="w-[2rem] invert dark:invert-0">
                            </div>
                            <div class="hover:social-icon-in social-icon-out p-2 border border-gray-750 rounded-lg">
                                <img src="/img/facebook.svg" class="w-[2rem] invert dark:invert-0">
                            </div>
                            <div class="hover:social-icon-in social-icon-out p-2 border border-gray-750 rounded-lg">
                                <img src="/img/instagram.svg" class="w-[2rem] invert dark:invert-0">
                            </div>
                            <div class="hover:social-icon-in social-icon-out p-2 border border-gray-750 rounded-lg">
                                <img src="/img/twitter.svg" class="w-[2rem] invert dark:invert-0">
                            </div>
                        </div>
                    </div>
                    <div class="w-full mt-10 flex flex-col items-center">
                        <h2 class="font-semibold text-[1.7rem] mb-1">Nos partenaires</h2>
                        <div class="relative w-full flex items-center h-20 mb-5 overflow-hidden">
                            <img src="/img/panoee.png" class="laptop:w-32 w-16 slider" style="--delay: 0s;">
                            <img src="/img/infomaniak.png" class="laptop:w-32 w-16 slider" style="--delay: 2s;">
                            <img src="/img/cpne.jpg" class="laptop:w-32 w-16 slider" style="--delay: 4s;">
                            <img src="/img/entreprise_immo_1.png" class="laptop:w-32 w-16 slider" style="--delay: 6s;">
                            <img src="/img/entreprise_immo_2.jpeg" class="laptop:w-32 w-16 slider" style="--delay: 8s;">
                            <img src="/img/entreprise_immo_3.png" class="laptop:w-32 w-16 slider" style="--delay: 10s;">
                            <img src="/img/entreprise_immo_4.png" class="laptop:w-32 w-16 slider" style="--delay: 12s;">
                            <img src="/img/entreprise_immo_5.webp" class="laptop:w-32 w-16 slider" style="--delay: 14s;">
                            <img src="/img/entreprise_immo_6.png" class="laptop:w-32 w-16 slider" style="--delay: 16s;">
                        </div>
                    </div>
                    <p class="laptop:text-lg text-sm italic laptop:w-1/3 w-full laptop:text-right text-center self-end pb-2">&copy; 2024 Créer par l'équipe Ma Visite 360</p>
                </div>
            </footer>
        </div>
    </body>
</html>