<?php

require_once __DIR__.'/../vendor/silex.phar';

$config = require_once __DIR__.'/../config/config.php';

$app = new Silex\Application();

$app["debug"] = $config['app.debug'];

# Register Twig
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path'       => __DIR__.'/../views',
    'twig.class_path' => __DIR__.'/../vendor/twig/twig/lib',
));

# Register Swiftmailer
$app->register(new Silex\Provider\SwiftmailerServiceProvider(), array(
    'swiftmailer.options' => array(
        'host'       => $config['swift.host'],
        'port'       => $config['swift.port'],
        'username'   => $config['swift.username'],
        'password'   => $config['swift.password'],
        'encryption' => $config['swift.encryption'],
        'auth_mode'  => $config['swift.auth_mode']),
        'swiftmailer.class_path'  => __DIR__.'/../vendor/swiftmailer/swiftmailer/lib/classes',
));

$app['config'] = $config;

return $app;
