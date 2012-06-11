<?php

$environments = __DIR__.'/environments.ini';

// @todo check if file exists?
$environments = parse_ini_file($environments);

// @todo don't only check for SERVER_NAME
$env = $environments[$_SERVER["SERVER_NAME"]];

$config = __DIR__.'/config.ini';

$ini = parse_ini_file($config, true);

$config_env = $ini[$env];
$config_all = $ini["all"];

$merged = array_merge($config_all, $config_env);

foreach ($merged as $key => $value) {
    if ($value == 'true') {
        $merged[$key] = true;
    } else if ($value == 'false') {
        $merged[$key] = false;
    }
}

return $merged;
