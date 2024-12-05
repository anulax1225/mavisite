# Installation

## Lancer windows sub-system for linux
lancer un cmd
```
    wsl --install -d Ubuntu
```
Vous etes maintenant dans un terminal linux

## Installer docker
dans linux installer docker
<a href="https://docs.docker.com/engine/install/ubuntu/">documentation docker</a>

## Installer lando
dans linux installer lando
<a href="https://docs.lando.dev/install/linux.html">documentation lando</a>

## Lancer le projet
installer git...
lancer ces commands
```
    git clone https://github.com/anulax1225/mavisite
    cd mavisite
    cp .env.example .env
    lando start 
    lando composer install
    lando php artisan key:gen
    lando php artisan migrate
    lando npmi
    lando dev
```

puis se rendre a l'adresse <a href="https://viewer360.lndo.site">https://viewer360.lndo.site</a>