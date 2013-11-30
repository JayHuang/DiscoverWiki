<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

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
	$result = r\table('api')
		->insert($document)
		->run($conn);
    return print_r($result);
}

function getConnection() {
	$conn = r\connect('localhost', 28015, 'test');
	return $conn;
}
