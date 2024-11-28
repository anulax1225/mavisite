<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Viewer 360</title>

        @vite("resources/js/app.js")
        @vite("resources/css/app.css")
    </head>
    <body class="w-screen h-screen bg-gray-700">
        <nav class="fixed right-0 left-0 top-0 h-14 bg-gray-700 border-b border-gray-600 flex items-center justify-center">
            <div class="w-3/4 h-full flex justify-between">
                <div class="flex items-center h-full">
                    <img src="/img/logo-mavisite360.png" class="h-full mr-2 p-2">
                    <h1 class="font-bold mr-7 text-2xl">Ma visite 360°</h1>
                    <p class="text-lg text-white bg-orange-500/90 rounded-lg px-3 font-semibold">home</p>
                </div>
                <div class="flex items-center h-full">
                    <h2>Contact</h2>
                    <div class="flex items-center h-fit py-1 px-4 border-l border-gray-600">
                        <button class="relative group flex items-center justify-center mr-6">
                            <img src="/img/dark.svg" class="w-[1.2rem] icon">
                            <div class="absolute group-focus:block hidden bg-gray-750 -bottom-[100px] -right-0 w-[160px] rounded-xl overflow-hidden">
                                <div class="px-4 pt-2 grid grid-cols-4 hover:bg-gray-600">
                                    <img src="/img/dark.svg" class="w-[1.4rem] icon pl-1">
                                    <h2 class="font-semibold text-[1.1rem] col-span-3 mb-1 text-left">Dark</h2>
                                </div>
                                <div class="px-4 pb-2 grid grid-cols-4 hover:bg-gray-600 items-center">
                                    <img src="/img/light.svg" class="w-[1.4rem] icon">
                                    <h2 class="font-semibold text-[1.1rem] mt-1 col-span-3 text-left">Light</h2>
                                </div>
                            </div>
                        </button>
                        <img src="/img/instagram.svg" class="w-[1.4rem] icon mr-3">
                        <img src="/img/twitter.svg" class="w-[1.4rem] icon">
                    </div>
                </div>
            </div>
        </nav>
        @yield("content")
    </body>
</html>