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
        <title>Viewer 360 - {{ $title }}</title>

        @vite("resources/js/app.js")
        @vite("resources/css/app.css")
    </head>
    <body class="relative w-screen h-screen antialiased font-robo bg-gray-850 -z-10">
        <!--<img src="/img/lightsource.png" class="w-full absolute top-0 right-0 left-0 -z-10">-->
        <nav class="fixed right-0 left-0 top-0 h-14 z-50">
            <div class="w-full h-full flex items-center justify-center bg-gradient-to-r from-gray-850 via-gray-750 to-gray-850 pb-[2px]">
                <div class="w-full h-full px-[12.5%] flex justify-between bg-gray-800">
                    <div class="flex items-center h-full">
                        <a href="/" class="h-full"><img src="/img/logo-mavisite360.png" class="h-full mr-2 p-2"></a>
                        <p class="text-lg text-white bg-orange-500/90 rounded-lg px-3 font-semibold">{{ $title }}</p>
                    </div>
                    <div class="flex items-center h-full">
                        <a href="/"><h1 class="font-semibold mr-4 text-lg">home</h1></a>
                        <a href="/demo"><h1 class="font-semibold mr-4 text-lg">demo</h1></a>
                        <h1 class="font-semibold mr-9 text-lg">contact</h1>
                        <div class="flex items-center h-fit py-1 px-2 border-l border-gray-600">
                            <button class="relative group flex items-center justify-center mr-6">
                                <img src="/img/dark.svg" class="w-[1.2rem] dark:invert">
                                <div class="absolute group-focus:block hidden bg-gray-800 -bottom-[100px] left-0 w-[160px] rounded-xl overflow-hidden">
                                    <div class="px-4 pt-2 grid grid-cols-4 hover:bg-gray-600 items-center">
                                        <img src="/img/dark.svg" class="w-[1.4rem] dark:invert pl-1">
                                        <h1 class="font-semibold text-[1.1rem] col-span-3 mb-1 text-left">Dark</h1>
                                    </div>
                                    <div class="px-4 pb-2 grid grid-cols-4 hover:bg-gray-600 items-center">
                                        <img src="/img/light.svg" class="w-[1.4rem] dark:invert">
                                        <h1 class="font-semibold text-[1.1rem] mt-1 col-span-3 text-left">Light</h1>
                                    </div>
                                </div>
                            </button>
                            <img src="/img/instagram.svg" class="w-[1.4rem] dark:invert mr-3">
                            <img src="/img/twitter.svg" class="w-[1.4rem] dark:invert">
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        @yield("content")
        <footer class="w-full h-14 px-[13%] bg-gray-800 flex items-center justify-between">
            <p class="italic">&copy; 2024 Créer par l'équipe MaVisite360</p>
        </footer>
    </body>
</html>