<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
    <body class="w-screen h-screen antialiased font-robo bg-gray-850 -z-10">
        <!--<img src="/img/lightsource.png" class="w-full absolute top-0 right-0 left-0 -z-10">-->
        <nav class="sticky right-0 left-0 top-0 h-16 z-50">
            <div class="w-full h-full flex items-center justify-center bg-gradient-to-r from-gray-850 via-gray-600 to-gray-850 pb-[2px]">
                <div class="w-full h-full px-[12.5%] flex justify-between bg-gray-800">
                    <div class="flex items-center h-full">
                        <a href="/" class="h-full"><img src="/img/logo-mavisite360.png" class="h-full hover:scale-105 mr-2 p-3"></a>
                        <p class="text-lg text-white bg-gradient-to-tr from-orange-400 to-orange-600 rounded-lg px-4 font-semibold">{{ $title }}</p>
                    </div>
                    <div class="flex items-center h-full">
                        <a href="/"><h1 class="mr-4 text-xl font-bold hover:scale-105">home</h1></a>
                        <a href="/demo"><h1 class="font-bold mr-4 text-xl hover:scale-105">demo</h1></a>
                        <a href="#contact"><h1 class="font-bold mr-9 text-xl hover:scale-105">contact</h1></a>
                        <div class="flex items-center h-fit py-[8px] pl-5 border-l border-gray-700">
                            <button class="relative group flex items-center justify-center mr-6" 
                            onclick="document.querySelector('#theme-panel').classList.toggle('hidden')">
                                <img src="/img/dark.svg" class="w-[1.4rem] hover:scale-105 invert">
                                <div id="theme-panel" class="absolute hidden bg-gray-800 -bottom-[110px] right-4/5 
                                w-[160px] rounded-xl overflow-hidden">
                                    <div class="px-4 pt-2 grid grid-cols-4 hover:bg-gray-600 items-center">
                                        <img src="/img/dark.svg" class="w-[1.4rem] invert pl-1">
                                        <h1 class="font-semibold text-[1.1rem] col-span-3 mb-1 text-left">Dark</h1>
                                    </div>
                                    <div class="px-4 pb-2 grid grid-cols-4 hover:bg-gray-600 items-center">
                                        <img src="/img/light.svg" class="w-[1.4rem] invert">
                                        <h1 class="font-semibold text-[1.1rem] mt-1 col-span-3 text-left">Light</h1>
                                    </div>
                                </div>
                            </button>
                            <img src="/img/instagram.svg" class="w-[1.6rem] hover:scale-105 invert mr-3">
                            <img src="/img/twitter.svg" class="w-[1.6rem] hover:scale-105 invert">
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        @yield("content")
        <footer class="w-full bg-gray-800">
            <div class="w-3/4 px-3 mx-auto flex flex-col items-center justify-between">
                <div class="w-full mt-10 flex flex-col items-center">
                    <h2 class="font-semibold text-[1.4rem] mb-1">Nos partenaires</h2>
                    <div class="relative w-full flex items-center h-20 mb-5 overflow-hidden">
                        <img src="/img/panoee.png" class="w-32 slider" style="--delay: 0s;">
                        <img src="/img/infomaniak.png" class="w-32 slider" style="--delay: 2s;">
                        <img src="/img/cpne.jpg" class="w-32 slider" style="--delay: 4s;">
                        <img src="/img/entreprise_immo_1.png" class="w-32 slider" style="--delay: 6s;">
                        <img src="/img/entreprise_immo_2.jpeg" class="w-32 slider" style="--delay: 8s;">
                        <img src="/img/entreprise_immo_3.png" class="w-32 slider" style="--delay: 10s;">
                        <img src="/img/entreprise_immo_4.png" class="w-32 slider" style="--delay: 12s;">
                        <img src="/img/entreprise_immo_5.webp" class="w-32 slider" style="--delay: 14s;">
                        <img src="/img/entreprise_immo_6.png" class="w-32 slider" style="--delay: 16s;">
                    </div>
                </div>
                <div class="w-full mt-5 flex items-center">
                    <div id="contact" class="w-1/3 mb-10">
                        <h2 class="font-semibold text-[1.7rem] border-b-2 border-gray-750 w-3/4 pr-20 mb-2">Nous contacter</h2>
                        <div class="px-3">
                            <h4 class="font-semibold mb-1">+41 78 694 09 79</h4>
                            <h4 class="font-semibold mb-1">contact@mv360.ch</h4>
                            <h4 class="font-semibold">Rue de la Maladière 80</h4>
                        </div>
                    </div>
                    <div class="flex items-start justify-evenly w-1/3 mb-10">
                        <div class="hover:social-icon-in social-icon-out p-2 border border-gray-750 rounded-lg">
                            <img src="/img/linkedin.svg" class="w-[2rem] brightness-0 invert">
                        </div>
                        <div class="hover:social-icon-in social-icon-out p-2 border border-gray-750 rounded-lg">
                            <img src="/img/discord.svg" class="w-[2rem] invert">
                        </div>
                        <div class="hover:social-icon-in social-icon-out p-2 border border-gray-750 rounded-lg">
                            <img src="/img/facebook.svg" class="w-[2rem] invert">
                        </div>
                        <div class="hover:social-icon-in social-icon-out p-2 border border-gray-750 rounded-lg">
                            <img src="/img/instagram.svg" class="w-[2rem] invert">
                        </div>
                        <div class="hover:social-icon-in social-icon-out p-2 border border-gray-750 rounded-lg">
                            <img src="/img/twitter.svg" class="w-[2rem] invert">
                        </div>
                    </div>
                    <p class="italic w-1/3 text-right self-end">&copy; 2024 Créer par l'équipe Ma Visite 360</p>
                </div>
            </div>
        </footer>
    </body>
</html>