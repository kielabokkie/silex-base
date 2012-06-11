# Silex-Base

## Installation

First you'll need to download the latest silex.phar file from the Silex website:

    wget silex.sensiolabs.org/get/silex.phar -O vendor/silex.phar

Next you have to download and install Composer:
 
    curl -s http://getcomposer.org/installer | php

This Silex-Base will install the Twig and Swiftmailer libraries. These dependencies are defined in the composer.json file:

    {
        "require": {
            "twig/twig": "1.6.0",
            "swiftmailer/swiftmailer": ">=4.1.2,<4.2-dev"
        }
    }

Change this file to your needs by adding or removing libraries. After that you have to run the install command:

    php composer.phar install

### Environments

Open the environments.ini file and change the URL's to the ones you want to user for your project:

    yoursite.local       = dev
    staging.yoursite.com = staging
    yoursite.com         = prod
    
The dev, staging and prod environments are used for creating environment specific configurations.

### Configuration

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
