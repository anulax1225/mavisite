<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Viewer 360</title>

        @vite("resources/js/app.js")
        @vite("resources/css/app.css")
    </head>
    <body class="relative w-screen min-w-[1200px] h-screen flex flex-col bg-gray-700">
        <a href="/"><img src="/img/logo-mavisite360.png" class="absolute w-[5rem] m-2"></a>
        <div class="w-5/6 flex justify-center items-center mt-10 mx-auto p-3  h-fit rounded-xl bg-black">
            <div class="w-[5rem] h-[5rem] rounded-full bg-orange-50 mx-1"></div>
            <div class="w-[5rem] h-[5rem] rounded-full bg-orange-100 mx-1"></div>
            <div class="w-[5rem] h-[5rem] rounded-full bg-orange-200 mx-1"></div>
            <div class="w-[5rem] h-[5rem] rounded-full bg-orange-300 mx-1"></div>
            <div class="w-[5rem] h-[5rem] rounded-full bg-orange-400 mx-1"></div>
            <div class="w-[5rem] h-[5rem] rounded-full bg-orange-500 mx-1"></div>
            <div class="w-[5rem] h-[5rem] rounded-full bg-orange-600 mx-1"></div>
            <div class="w-[5rem] h-[5rem] rounded-full bg-orange-700 mx-1"></div>
            <div class="w-[5rem] h-[5rem] rounded-full bg-orange-800 mx-1"></div>
            <div class="w-[5rem] h-[5rem] rounded-full bg-orange-900 mx-1"></div>
            <div class="w-[5rem] h-[5rem] rounded-full bg-orange-950 mx-1"></div>
        </div>
        <div class="w-5/6 flex flex-wrap justify-center items-center mt-10 mx-auto p-3  h-fit rounded-xl bg-black">
            <div class="w-[5rem] h-[5rem] rounded-full bg-gray-50 mx-1"></div>
            <div class="w-[5rem] h-[5rem] rounded-full bg-gray-100 mx-1"></div>
            <div class="w-[5rem] h-[5rem] rounded-full bg-gray-150 mx-1"></div>
            <div class="w-[5rem] h-[5rem] rounded-full bg-gray-200 mx-1"></div>
            <div class="w-[5rem] h-[5rem] rounded-full bg-gray-250 mx-1"></div>
            <div class="w-[5rem] h-[5rem] rounded-full bg-gray-300 mx-1"></div>
            <div class="w-[5rem] h-[5rem] rounded-full bg-gray-350 mx-1"></div>
            <div class="w-[5rem] h-[5rem] rounded-full bg-gray-400 mx-1"></div>
            <div class="w-[5rem] h-[5rem] rounded-full bg-gray-450 mx-1"></div>
            <div class="w-[5rem] h-[5rem] rounded-full bg-gray-500 mx-1"></div>
            <div class="w-[5rem] h-[5rem] rounded-full bg-gray-550 mx-1"></div>
            <div class="w-[5rem] h-[5rem] rounded-full bg-gray-600 mx-1"></div>
            <div class="w-[5rem] h-[5rem] rounded-full bg-gray-650 mx-1"></div>
            <div class="w-[5rem] h-[5rem] rounded-full bg-gray-700 mx-1"></div>
            <div class="w-[5rem] h-[5rem] rounded-full bg-gray-750 mx-1"></div>
            <div class="w-[5rem] h-[5rem] rounded-full bg-gray-800 mx-1"></div>
            <div class="w-[5rem] h-[5rem] rounded-full bg-gray-850 mx-1"></div>
            <div class="w-[5rem] h-[5rem] rounded-full bg-gray-900 mx-1"></div>
            <div class="w-[5rem] h-[5rem] rounded-full bg-gray-950 mx-1"></div>
        </div>
        <div class="w-full flex">
            <div class="m-10">
                <h1 class="text-gray-50 text-[5rem] font-bold">Titre 1</h1>
                <h2 class="text-gray-100 text-[4rem] font-semibold">Titre 2</h2>
                <h3 class="text-gray-150 text-[3rem] font-semibold">Titre 3</h3>
                <h4 class="text-gray-200 text-[2rem] font-semibold">Text</h4>
                <p class="text-gray-250 text-[1rem] font-semibold">Sous text</p>
            </div>
            <div class="bg-gray-800 rounded-xl px-10 py-5 shadow-xl shadow-gray-800 w-[30rem] m-10">
                <div class="flex items-center w-full border-b border-gray-150 mb-4 pb-2">
                    <img src="/img/logo.svg" class="h-[3rem] mr-4">
                    <h1 class="text-gray-50 text-[2rem] font-bold">Test de carte</h1>
                </div>
                <h4 class="text-gray-200 text-[1.2rem] font-semibold">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer porta pretium risus.</h4>
            </div>
            <div class="m-10 flex flex-col items-start">
                <button class="rounded-lg bg-orange-600 px-4 py-2 text-white font-bold mb-2">Primaire</button>
                <button class="rounded-lg bg-orange-400 px-4 py-2 text-white font-bold">Secondaire</button>
            </div>
        <div>
    </body>
</html>