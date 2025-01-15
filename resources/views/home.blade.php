@extends("layout")

@section("content")
    <div class="relative flex flex-col items-center justify-center overflow-hidden">
        <img class="absolute w-full right-0 left-0 -z-10 focus-camera" src="/img/immo.jpg">
        <div class="desktop:w-3/4 laptop:w-[90%] w-[95%] bg-gradient-to-tr from-orange-600/95 to-orange-400/95 rounded-lg 
        shadow-lg shadow-gray-800 flex flex-col items-center laptop:p-14 p-5 laptop:my-7 my-4">
            <h5 class="laptop:text-[6rem] text-5xl font-bold mx-auto leading-none">Ma Visite 360</h5>
            <h5 class="laptop:text-xl text-sm italic text-center mx-auto">Ma visite, mon choix à 360°</h5>
        </div>
    </div>
    <div class="flex flex-col desktop:w-3/4 laptop:w-[90%] px-5 h-fit mx-auto laptop:my-10 my-2">
        <h1 class="laptop:pb-5 px-3 laptop:text-[3rem] text-2xl font-bold border-b border-gray-750 dark:border-gray-200">Histoire</h1>
        <div class="w-full flex laptop:flex-row flex-col items-start mt-2 pb-2 border-b border-gray-750 dark:border-gray-200">
            <h2 class="laptop:pl-3 laptop:mr-16 laptop:mt-0 mb-4 laptop:w-1/2 laptop:text-2xl text-md font-semibold">
            Fondée en 2024 et basée à Neuchâtel.<br> 
            "Ma Visite 360" est une entreprise fictive spécialisée dans les technologies immersives de visite virtuelle.
            </h2>
            <div class="mt-1">
                <h2 class="laptop:text-xl text-sm">
                    "Ma Visite 360" propose un service novateur de visites virtuelles immersives 360°, 
                    destiné principalement aux agences immobilières.<br> 
                    Notre solution clé en main englobe toutes les étapes : 
                </h2>
                <ul class="text-gray-50 dark:text-gray-900 laptop:text-xl text-sm text-[0.8rem] list-disc px-7">
                    <li><h3 class="font-semibold">Prise de contact.</h3></li>
                    <li><h3 class="font-semibold">Capture de photos professionnelles.</h3></li>
                    <li><h3 class="font-semibold">Création de visites virtuelles interactives et hébergement en ligne.</h3></li>
                </ul>
                <h2 class="laptop:text-xl text-sm">
                    Cette approche permet une intégration simple et rapide sur les sites web des clients.
                </h2>
            </div>
        </div>
        
        <div class="w-full h-fit flex items-center justify-center flex-col border-b border-gray-750 dark:border-gray-200 pb-1">
            <div class="w-full mt-5 flex laptop:flex-row flex-col items-center">
                <div class="laptop:w-[40%] w-full p-4 hover:scale-105 m-3 bg-gradient-to-tr from-orange-600 to-orange-500 shadow-md 
                shadow-gray-900 dark:shadow-gray-300 rounded-lg">
                    <h5 class="laptop:text-3xl text-2xl font-semibold w-full text-center">Vision</h5>
                    <h5 class="laptop:px-2 laptop:text-lg text-md font-semibold">Transformer la présentation immobilière en une expérience immersive, accessible et sans contraintes.</h5>
                </div>
                <div class="laptop:w-[40%] w-full laptop:p-6 p-4 hover:scale-105 m-3 bg-gradient-to-tl from-orange-500 to-orange-600 
                shadow-md shadow-gray-900 dark:shadow-gray-300 rounded-lg">
                    <h5 class="laptop:text-3xl text-2xl font-semibold text-center">Mission</h5>
                    <h5 class="laptop:px-2 laptop:text-lg text-md pb-2 font-semibold">Offrir une solution clé en main de visites virtuelles 360°, permettant aux agences immobilières et autres secteurs de valoriser leurs espaces et de gagner en efficacité.</h5>
                </div>
                <div class="laptop:w-[20%] p-4 hover:scale-105 m-3 bg-gradient-to-r from-orange-500 to-orange-600 
                shadow-md shadow-gray-900 dark:shadow-gray-300 rounded-lg">
                    <h5 class="laptop:text-3xl text-2xl font-semibold text-center">Valeurs</h5>
                    <ul class="text-gray-50 laptop:text-lg text-md list-disc laptop:px-5 px-3">
                        <li><h5 class="font-semibold">Innovation</h5></li>
                        <li><h5 class="font-semibold">Simplicité</h5></li>
                        <li><h5 class="font-semibold">Professionnalisme</h5></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <h1 class="px-3 laptop:pb-5 laptop:text-[3rem] text-2xl font-semibold mt-8 border-b border-gray-750 dark:border-gray-200 mb-5">Services et offres</h1>
        <div class="w-full laptop:px-3 flex laptop:flex-row flex-col laptop:justify-between items-center laptop:mb-0 mb-6">
            <div class="laptop:w-[60%] w-full laptop:p-5 p-4 laptop:mr-2 laptop:mb-0 mb-6 hover:scale-[1.01] bg-gradient-to-r from-orange-500 to-orange-600 
            shadow-md shadow-gray-900 dark:shadow-gray-300 rounded-lg">
                <h5 class="laptop:text-3xl text-2xl font-semibold text-center mb-1">Valeur ajoutée</h5>
                <ul class="text-gray-50 laptop:text-lg text-md list-disc laptop:px-5 px-3">
                    <li><h5 class="font-semibold mb-2">Simplifie les visites pour les acheteurs potentiels.</h5></li>
                    <li><h5 class="font-semibold mb-2">Réduit les visites inutiles en présentiel, augmentant l’efficacité des agences.</h5></li>
                    <li><h5 class="font-semibold">Accessible 24h/24, permettant une flexibilité maximale.</h5></li>
                </ul>
            </div>
            <div class="laptop:w-[40%] laptop:p-8 p-4  laptop:ml-1 hover:scale-[1.01] bg-gradient-to-r from-orange-500 to-orange-600 
            shadow-md shadow-gray-900 dark:shadow-gray-300 rounded-lg">
                <h5 class="laptop:text-3xl text-2xl font-semibold text-center mb-1">Visite</h5>
                <ul class="text-gray-50 laptop:text-lg text-md list-disc laptop:px-5 px-3">
                    <li><h5 class="font-semibold mb-2">Capture des photos 360° haute définition.</h5></li>
                    <li><h5 class="font-semibold mb-2">Création de visites virtuelles interactives.</h5></li>
                    <li><h5 class="font-semibold">Hébergement en ligne sur notre plateforme.</h5></li>
                </ul>
            </div>
        </div>
        <div class="w-full flex laptop:flex-row flex-col laptop:justify-between items-center mt-5 laptop:mb-0 mb-6">
            <div class="laptop:w-1/2 w-full laptop:h-full p-[2px] mb-6 laptop:m-2 bg-gradient-to-r from-orange-400 to-orange-600 shadow-md shadow-gray-900 dark:shadow-gray-300 rounded-lg">
                <div class="w-full bg-gray-900 dark:bg-white rounded-md p-5 flex flex-col justify-between">
                    <div>
                        <div class="w-full flex justify-between items-center">
                            <h1 class="laptop:text-3xl text-2xl font-bold ">Visite unique</h1>
                            <h3 class="laptop:text-2xl">200.-</h3>
                        </div>
                        <ul class="text-gray-150 dark:text-gray-1000 laptop:text-lg text-md list-disc px-5 mt-2">
                            <li><h5 class="dark:text-gray-1000">Prise des photo de votre visite</h5></li>
                            <li><h5 class="dark:text-gray-1000">Création de la visite virtuelle</h5></li>
                            <li><h5 class="dark:text-gray-1000">Hébergement (inclue des frais supplémentaire)</h5></li>
                        </ul>
                    </div>
                    <button class="mt-5 laptop:self-end laptop:w-1/3 rounded-lg hover:scale-105
                    bg-orange-600 px-4 py-2 text-white font-bold mb-2">Consulter l'offre</button>
                </div>
            </div>
            <div class="laptop:w-1/2 w-full p-[2px] laptop:m-2 bg-gradient-to-r from-orange-400 to-orange-600 shadow-md 
            shadow-gray-900 dark:shadow-gray-300 rounded-lg">
                <div class="w-full h-full bg-gray-900 dark:bg-white rounded-md p-5 flex flex-col justify-between">
                    <div>
                        <div class="w-full flex justify-between items-center">
                            <h1 class="laptop:text-3xl text-2xl font-bold ">Abonnement premium</h1>
                            <h3 class="laptop:text-2xl">60.-/mois</h3>
                        </div>
                        <ul class="text-gray-150 dark:text-gray-1000 laptop:text-lg text-md list-disc px-5 mt-2">
                            <li><h5 class="dark:text-gray-1000">Réduction de 10% sur les la création de visite virtuelle</h5></li>
                            <li><h5 class="dark:text-gray-1000">Hébergement offert</h5></li>
                        </ul>
                    </div>
                    <button class="mt-5 laptop:self-end laptop:w-1/3 rounded-lg hover:scale-105
                    bg-orange-600 px-4 py-2 text-white font-bold mb-2">Consulter l'offre</button>
                </div>
            </div>
        </div>
    </div>
@endsection