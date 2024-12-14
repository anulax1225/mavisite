@extends("layout")

@section("content")
    <div class="relative flex flex-col items-center justify-center overflow-hidden">
        <img class="w-full absolute right-0 left-0 -z-10 blur-[4px]" src="/img/immo.jpg">
        <div class="w-3/4 bg-gradient-to-tr from-orange-600/80 to-orange-400/80 rounded-lg 
        shadow-lg shadow-gray-800 flex flex-col items-center p-14 my-7">
            <h5 class="text-[6rem] font-bold mx-auto leading-none">Ma Visite 360</h5>
            <h5 class="text-[1.2rem] italic text-center mx-auto">Ma visite, mon choix à 360°</h5>
        </div>
    </div>
    <div class="flex flex-col w-3/4 h-fit mx-auto mb-10">
        <h1 class="mt-10 px-3 text-[3rem] font-bold border-b border-gray-750">Histoire</h1>
        <div class="w-full flex items-start mt-2">
            <h2 class="pl-3 mr-16 w-1/2 text-[1.5rem] font-semibold">
                Fondée en 2024 et basée à Neuchâtel.<br> 
                "Ma Visite 360" est une entreprise fictive spécialisée dans les technologies immersives, 
                avec un site web accessible sous le nom de domaine mv360.ch.
            </h2>
            <div class="mt-1">
                <h2 class="text-[1.3rem]">
                    "Ma Visite 360" propose un service novateur de visites virtuelles immersives 360°, 
                    destiné principalement aux agences immobilières.<br> 
                    Notre solution clé en main englobe toutes les étapes : 
                </h2>
                <ul class="text-gray-50 text-[1.3rem] list-disc px-7">
                    <li><h3 class="font-semibold">Prise de contact.</h3></li>
                    <li><h3 class="font-semibold">Capture de photos professionnelles.</h3></li>
                    <li><h3 class="font-semibold">Création de visites virtuelles interactives et hébergement en ligne.</h3></li>
                </ul>
                <h2 class="text-[1.3rem]">
                    Cette approche permet une intégration simple et rapide sur les sites web des clients.
                </h2>
            </div>
        </div>
        
        <div class="w-full h-fit flex items-center justify-center flex-col border-b border-gray-750 pb-1">
            <div class="mt-5 flex w-full items-center">
                <div class="w-[40%] p-3 hover:scale-105 m-3 bg-gradient-to-tr from-orange-600 to-orange-500 shadow-md shadow-gray-900 rounded-lg">
                    <h5 class="text-[2rem] font-semibold w-full text-center">Vision</h5>
                    <h5 class="px-2 text-[1.2rem] font-semibold">Transformer la présentation immobilière en une expérience immersive, accessible et sans contraintes.</h5>
                </div>
                <div class="w-[40%] p-6 hover:scale-105 m-3 bg-gradient-to-tl from-orange-500 to-orange-600 shadow-md shadow-gray-900 rounded-lg">
                    <h5 class="text-[2rem] font-semibold text-center">Mission</h5>
                    <h5 class="px-2 text-[1.2rem] pb-2 font-semibold">Offrir une solution clé en main de visites virtuelles 360°, permettant aux agences immobilières et autres secteurs de valoriser leurs espaces et de gagner en efficacité.</h5>
                </div>
                <div class="w-[20%] p-3 hover:scale-105 m-3 bg-gradient-to-r from-orange-500 to-orange-600 shadow-md shadow-gray-900 rounded-lg">
                    <h5 class="text-[2rem] font-semibold text-center">Valeurs</h5>
                    <ul class="text-gray-50 text-[1.2rem] list-disc px-5">
                        <li><h5 class="font-semibold">Innovation</h5></li>
                        <li><h5 class="font-semibold">Simplicité</h5></li>
                        <li><h5 class="font-semibold">Professionnalisme</h5></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <h1 class="px-3 text-[3rem] font-semibold mt-8 border-b border-gray-750 mb-5">Services et offres</h1>
        <div class="w-full px-3 flex justify-between items-center">
            <div class="w-[40%] p-8 mr-2 hover:scale-[1.01] bg-gradient-to-r from-orange-500 to-orange-600 shadow-md shadow-gray-900 rounded-lg">
                <h5 class="text-[2rem] font-semibold text-center">Visite</h5>
                <ul class="text-gray-50 text-[1rem] list-disc px-5">
                    <li><h5 class="font-semibold mb-2">Capture des photos 360° haute définition.</h5></li>
                    <li><h5 class="font-semibold mb-2">Création de visites virtuelles interactives.</h5></li>
                    <li><h5 class="font-semibold">Hébergement en ligne sur notre plateforme.</h5></li>
                </ul>
            </div>
            <div class="w-[60%] p-5 ml-1 hover:scale-[1.01] bg-gradient-to-r from-orange-500 to-orange-600 shadow-md shadow-gray-900 rounded-lg">
                <h5 class="text-[2rem] font-semibold text-center">Valeur ajoutée</h5>
                <ul class="text-gray-50 text-[1rem] list-disc px-5">
                    <li><h5 class="font-semibold mb-2">Simplifie les visites pour les acheteurs potentiels.</h5></li>
                    <li><h5 class="font-semibold mb-2">Réduit les visites inutiles en présentiel, augmentant l’efficacité des agences.</h5></li>
                    <li><h5 class="font-semibold">Accessible 24h/24, permettant une flexibilité maximale.</h5></li>
                </ul>
            </div>
        </div>
        <div class="w-full flex justify-between mt-5">
            <div class="w-1/2 p-[2px] m-2 bg-gradient-to-r from-orange-400 to-orange-600 shadow-md shadow-gray-900 rounded-lg">
                <div class="w-full h-full bg-gray-900 rounded-md p-5 flex flex-col justify-between">
                    <div>
                        <div class="w-full flex justify-between items-center">
                            <h1 class="text-[2rem] font-bold ">Visite unique</h1>
                            <h3 class="text-[1.6rem]">200.-</h3>
                        </div>
                        <ul class="text-gray-150 text-[1.3rem] list-disc px-5 mt-2">
                            <li><h5 class="text-[1rem]">Prise des photo de votre visite</h5></li>
                            <li><h5 class="text-[1rem]">Création de la visite virtuelle</h5></li>
                            <li><h5 class="text-[1rem]">Hébergement (inclue des frais supplémentaire)</h5></li>
                        </ul>
                    </div>
                    <button class="mt-5 self-end w-1/3 rounded-lg hover:scale-105
                    bg-orange-600 px-4 py-2 text-white font-bold mb-2">Consulter l'offre</button>
                </div>
            </div>
            <div class="w-1/2 p-[2px] m-2 bg-gradient-to-r from-orange-400 to-orange-600 shadow-md shadow-gray-900 rounded-lg">
                <div class="w-full h-full bg-gray-900 rounded-md p-5 flex flex-col justify-between">
                    <div>
                        <div class="w-full flex justify-between items-center">
                            <h1 class="text-[2rem] font-bold ">Abonnement premium</h1>
                            <h3 class="text-[1.6rem]">60.-/mois</h3>
                        </div>
                        <ul class="text-gray-150 text-[1.3rem] list-disc px-5 mt-2">
                            <li><h5 class="text-[1rem]">Réduction de 10% sur les la création de visite virtuelle</h5></li>
                            <li><h5 class="text-[1rem]">Hébergement offert</h5></li>
                        </ul>
                    </div>
                    <button class="mt-5 self-end w-1/3 rounded-lg hover:scale-105
                    bg-orange-600 px-4 py-2 text-white font-bold mb-2">Consulter l'offre</button>
                </div>
            </div>
        </div>
    </div>
@endsection