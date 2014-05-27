<?php
/**
 * MySQLi Books and Authors Manager
 * @author      Charlike Mike Reagent <https://github.com/tunnckoCore>
 * @license     MIT License <http://opensource.org/licenses/MIT>
 * @link        https://github.com/tunnckoCore/MySQLi-Books-and-Authors-Manager/
 * @link        http://www.charlike.pw/telerik/MySQLi-Books-and-Authors-Manager/
 */
error_reporting(E_ALL ^ E_NOTICE);
mb_internal_encoding('UTF-8');
/**
 * Define project constants
 */
define('DS', DIRECTORY_SEPARATOR);

define('APP_EXT', '.php');
define('APP_ROOT', __DIR__ . DS);
define('APP_PATH', APP_ROOT . 'application' . DS);
define('APP_MODELS', APP_PATH . 'models' . DS);
define('APP_VIEWS', APP_PATH . 'views' . DS);
//define('APP_CONTROLLERS', APP_PATH . 'controllers' . DS);

define('APP_NAME', 'MySQLi Books and Authors Manager');
define('APP_URI', 'http://www.charlike.pw/telerik/MySQLi-Books-and-Authors-Manager/');

define('APP_DB_HOST', 'localhost');
define('APP_DB_USER', 'root');
define('APP_DB_PASS', 'wilderwein');
define('APP_DB_NAME', 'books');
define('APP_DB_PORT', 3306);

require_once APP_ROOT . 'system' . DS . 'library' . APP_EXT;
require_once APP_ROOT . 'system' . DS . 'functions' . APP_EXT;

$DB_INIT = dbInit();