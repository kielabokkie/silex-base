# Silex-Base

## Installation

First you'll need to clone this project:

    git clone git@github.com:kielabokkie/silex-base.git yourproject

Next you have to download and install Composer:

    curl -s http://getcomposer.org/installer | php

Composer is configured to install Silex, Twig and Swiftmailer. These dependencies are defined in the composer.json file:

    {
        "require": {
            "silex/silex": "~1.0",
            "twig/twig": ">=1.8,<2.0-dev",
            "swiftmailer/swiftmailer": ">=4.1.2,<4.2-dev"
        }
    }

Change this file to your needs by adding or removing libraries. After that you have to run the install command:

    php composer.phar install

## Configuration

In the config directory there are two important files that you should edit to your needs.

### environments.ini

The environments file is used to make it possible to have environment specific configuration parameters. You can specify an URL and the environment (for example: dev, staging and prod) that should be used.

Open the environments.ini file and change the URL's to the ones you want to use for your project:

    yoursite.local       = dev
    staging.yoursite.com = staging
    yoursite.com         = prod

You can add your own custom environments in this file. If you do then don't forget to also add a new section to the config.ini file that is described below.

### config.ini

When you open the config.ini file you will see that the different environments have their own sections. At the bottom of the file there is an 'all' section. Environment specific configuration will overwrite this 'all' configuration.

    [prod]
    app.env          = 'prod'
    app.email.from   = 'prod@yoursite.com'
    app.email.to     = 'prod@yoursite.com'

    [staging]
    app.env          = 'staging'
    app.email.from   = 'staging@yoursite.com'
    app.email.to     = 'staging@yoursite.com'

    [dev]
    app.env          = 'dev'
    app.debug        = 'true'
    app.email.from   = 'dev@yoursite.com'
    app.email.to     = 'dev@yoursite.com'

    [all]
    app.debug        = 'false'
    swift.host       = 'smtp.gmail.com'
    swift.port       = '465'
    swift.username   = 'username@gmail.com'
    swift.password   = 'password'
    swift.encryption = 'ssl'
    swift.auth_mode  = 'login'
