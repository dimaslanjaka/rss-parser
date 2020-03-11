<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/agc/autoload.php';
$p = new Proxy;
$p->add_default(4)->src(__DIR__ . '/proxy.txt')->out(__DIR__ . '/proxy.txt');
$p->getProxies(1)->check();
