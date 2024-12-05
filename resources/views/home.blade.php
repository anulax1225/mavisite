@extends("layout")

@section("content")
    <div class="relative flex flex-col items-center justify-center overflow-hidden mt-12">
        <img class="w-full absolute right-0 left-0 -z-10" src="/img/immo.jpg">
        <div class="bg-gradient-to-t from-orange-500 to-orange-600 rounded-lg shadow-md shadow-gray-900 flex flex-col items-center p-10 mt-10 mb-10 w-fit">
            <h5 class="text-[6rem] font-bold mx-auto leading-none">MaVisite360°</h5>
            <h5 class="text-[1.2rem] italic text-center mx-auto">Ma visite, mon choix à 360°</h5>
        </div>
    </div>
    <div class="flex flex-col w-3/4 h-fit mx-auto mb-10">
        <h1 class="mt-10 px-3 text-[3rem] font-bold">Histoire</h1>
        <h2 class="px-3 mx-auto text-[1.4rem] font-semibold">Fondée en 2024 et basée à Neuchâtel. MaVisite360 est une entreprise fictive spécialisée dans les technologies immersives, avec un site web accessible sous le nom de domaine mv360.ch.</h2>
        <h2 class="mt-5 px-3 mx-auto text-[1.1rem]">MaVisite360 propose un service novateur de visites virtuelles immersives 360°, destiné principalement aux agences immobilières. Notre solution clé en main englobe toutes les étapes : prise de contact, capture de photos professionnelles, création de visites virtuelles interactives et hébergement en ligne. Cette approche permet une intégration simple et rapide sur les sites web des clients.</h2>
        <div class="w-full h-fit flex items-center justify-center flex-col">
            <div class="mt-5 flex w-full">
                <div class="w-1/3 p-3 m-3 bg-gradient-to-r from-orange-600 to-orange-500 shadow-md shadow-gray-900 rounded-lg">
                    <h5 class="text-[2rem] font-bold w-full text-center">Vision</h5>
                    <h5 class="px-2 text-[1.2rem] font-semibold">Transformer la présentation immobilière en une expérience immersive, accessible et sans contraintes.</h5>
                </div>
                <div class="w-1/3 p-3 m-3 bg-gradient-to-r from-orange-500 to-orange-600 shadow-md shadow-gray-900 rounded-lg">
                    <h5 class="text-[2rem] font-bold text-center">Valeurs</h5>
                    <ul class="text-gray-150 text-[1.2rem] list-disc px-5">
                        <li><h5 class="font-semibold">Innovation</h5></li>
                        <li><h5 class="font-semibold">Simplicité</h5></li>
                        <li><h5 class="font-semibold">Professionnalisme</h5></li>
                    </ul>
                </div>
                <div class="w-1/3 p-3 m-3 bg-gradient-to-r from-orange-500 to-orange-600 shadow-md shadow-gray-900 rounded-lg">
                    <h5 class="text-[2rem] font-bold text-center">Mission</h5>
                    <h5 class="px-2 text-[1.2rem] pb-2 font-semibold">Offrir une solution clé en main de visites virtuelles 360°, permettant aux agences immobilières et autres secteurs de valoriser leurs espaces et de gagner en efficacité.</h5>
                </div>
            </div>
        </div>
        
        <h1 class="px-3 text-[3rem] font-semibold mt-7">Services et offres</h1>
        <div class="w-full px-3">
            <div class="w-full p-5 bg-gradient-to-r from-orange-500 to-orange-600 shadow-md shadow-gray-900 rounded-lg">
                <ul class="text-gray-150 text-[1.3rem] list-disc px-5">
                    <li><h5 class="font-semibold">Capture des photos haute définition en 360°.</h5></li>
                    <li><h5 class="font-semibold">Création de visites virtuelles interactives via Panoee.</h5></li>
                    <li><h5 class="font-semibold">Hébergement en ligne sur une plateforme accessible (mv360.ch).</h5></li>
                </ul>
            </div>
        </div>
        <div class="w-full flex justify-between mt-5">
            <div class="w-1/2 p-[2px] m-2 bg-gradient-to-r from-orange-400 to-orange-600 shadow-md shadow-gray-900 rounded-lg">
                <div class="w-full h-full bg-gray-900 rounded-md p-5">
                    <h1 class="text-[2rem] font-bold ">Forfait unique</h1>
                    <ul class="text-gray-150 text-[1.3rem] list-disc px-5 mt-2">
                        <li><h5 class="text-[1rem]">Prise des photo de votre visite</h5></li>
                        <li><h5 class="text-[1rem]">Création de la visite virtuelle</h5></li>
                        <li><h5 class="text-[1rem]">Hébergement (inclue des frais supplémentaire)</h5></li>
                    </ul>
                </div>
            </div>
            <div class="w-1/2 p-[2px] m-2 bg-gradient-to-r from-orange-400 to-orange-600 shadow-md shadow-gray-900 rounded-lg">
                <div class="w-full h-full bg-gray-900 rounded-md p-5">
                    <h1 class="text-[2rem] font-bold ">Forfait unique</h1>
                    <ul class="text-gray-150 text-[1.3rem] list-disc px-5 mt-2">
                        <li><h5 class="text-[1rem]">Prise des photo de votre visite</h5></li>
                        <li><h5 class="text-[1rem]">Création de la visite virtuelle</h5></li>
                        <li><h5 class="text-[1rem]">Hébergement (inclue des frais supplémentaire)</h5></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection