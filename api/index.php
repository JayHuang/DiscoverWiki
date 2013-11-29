<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

// echo ;
// $PROJECT_ROOT = '/var/www/rethinkdb/';
// require '../vendor/autoload.php';
// use Slim\Slim;
require_once("rdb/rdb.php");
require_once("Slim/Slim.php");
\Slim\Slim::registerAutoloader();
use \Slim\Slim;

$app = new Slim();

$app->post('/storeArticle', 'storeArticle');
$app->get('/storeArticle', 'storeArticle');
$app->get('/version', 'getVersion');
$app->get('/', 'home');

$app->run();

// public function __construct() {
// 	$app->$conn = r\connect('localhost');
// }

function home() {
	echo 'This is the API!';
}

function getVersion() {
	echo 'v1.0.0';
}

function storeArticle() {
	$conn = getConnection();
	$request = Slim::getInstance()->request();
	$arr =  json_decode($request->getBody(), true);
	$document = array('title' => $arr['title'], 'extract' => $arr['extract']);
	// print_r($document);
	$result = r\table('api')
		->insert($document)
		->run($conn);
    return print_r($result);
}

function getConnection() {
	$conn = r\connect('localhost', 28015, 'test');
	return $conn;
}

// public function __destruct() {
// 	$app->$conn = r\close();
// }