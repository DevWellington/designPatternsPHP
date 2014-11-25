<?php
require_once '../vendor/autoload.php';

const DBNAME = '../src/db.sqlite';

use Aura\Di\Container;
use Aura\Di\Forge;
use Aura\Di\Config;

$di = new Container(new Forge(new Config));

$di->set('db', \Ribeiro\DB\DbConnection::getConnection());






