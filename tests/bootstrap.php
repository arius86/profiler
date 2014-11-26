<?php
error_reporting(E_ALL);
//Test Suite bootstrap
include __DIR__ . "/../vendor/autoload.php";

define('TESTS_ROOT_DIR', dirname(__FILE__));

$configArray = require_once dirname(__FILE__) . '/fixtures/app/config/config.php';

$config = new \Phalcon\Config($configArray);
$di = new \Phalcon\DI\FactoryDefault();

$di->set('config', $config);

require_once dirname(__FILE__) . '/fixtures/app/services/SqliteServiceProvider.php';
(new \SqliteServiceProvider)->register($di);

\Phalcon\DI::setDefault($di);
