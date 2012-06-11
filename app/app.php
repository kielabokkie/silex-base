<?php

$app = require_once __DIR__.'/bootstrap.php';

$app->get('/', function() use ($app) {
  
//    $message = Swift_Message::newInstance()
//                   ->setSubject('#test')
//                   ->setFrom(array($app['config']['app.email.from']))
//                   ->setTo(array($app['config']['app.email.to']))
//                   ->setBody("This is a test from Silex");
//    
//    $app['mailer']->send($message);
  
    return $app['twig']->render('home.twig.html', array(
        'env' => $app['config']['app.env'],
    ));
});

return $app;
