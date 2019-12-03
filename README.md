Note: I started this project with Ubuntu because Docker in Windows works with Home or Enterprise Editions and I have Windows Home (I installed Docker toolbox but I did not like it. So I prefer to work Ubuntu).

AKC project

Laravel Project and GoogleMaps JS API

Requisites:

  LAMP = PHP 7.2.24, MySQL Distrib 5.7.28

  Git version 2.17.1

  Composer version 1.9.1

    Suggestion: chmod +x /usr/local/bin/composer

  Laravel Framework 6.6.0

    composer create-project --prefer-dist laravel/laravel AKC_project

    sudo chown -R www-data:www-data bootstrap/ storage/ => this action can get problems in your local environment, so you need to give them permissions to write too.

    sudo chmod 777  bootstrap/ storage/ -R => I do not remember what permission I need, so I just put 777 Open. Just for this project.

    npm

      composer require laravel/ui --dev

      php artisan ui vue --auth

      npm install

      npm run dev

    php artisan make:model Service -m

    php artisan make:controller ServicesController

    php artisan make:controller websiteController

  Dockecr => https://docs.docker.com/install/linux/docker-ce/ubuntu/

    sudo apt-get install \
    apt-transport-https \
    ca-certificates \
    curl \
    gnupg-agent \
    software-properties-common

    curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -

    sudo apt-key fingerprint 0EBFCD88

    sudo add-apt-repository \
     "deb [arch=amd64] https://download.docker.com/linux/ubuntu \
     $(lsb_release -cs) \
     stable"

    sudo apt-get install docker-ce docker-ce-cli containerd.io

    sudo apt-get install docker-compose

    sudo docker run hello-world => to test

    Terminal with Dockecr and my Laravel App

    vi docker-compose.yml

    mkdir container-build

    cd container-build

    mkdir web

    cd web

    vi Dockerfile

    I used these examples, and I changed them:

      https://github.com/Beachcasts/doctrine-expressive-example/blob/master/docker-compose.yml

      https://github.com/Beachcasts/doctrine-expressive-example/blob/master/container-build/web/Dockerfile

    export DOCKER_HOST=127.0.0.1

    sudo docker-compose build
    sudo docker-compose up


EndRequisites;

To Do List:

Work properly, bugless Code must be clean and readable. Y

Readme.md with clear installation notes Y

Stored in a Git repository  Y

DocBlock / DocComment on every function written Y

Good looking and Clean code Y

Bootstrap, Material    Y

Passing tests          Y

Docker setup           Y

Migrations             Y

Use of Vue or React    Y => Just in Laravel Login Module. I would like to mix this with GoogleMapsJs functions, but I need more time and the knowledge
