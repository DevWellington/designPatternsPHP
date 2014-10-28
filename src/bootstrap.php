<?php
require_once '../vendor/autoload.php';

const DBNAME = '../src/db.sqlite';

use Aura\Di\Container;
use Aura\Di\Forge;
use Aura\Di\Config;

$di = new Container(new Forge(new Config));

$SQLiteCon = new \Ribeiro\DB\SQLiteConnection();
$di->set('db', $SQLiteCon->getConnection());






