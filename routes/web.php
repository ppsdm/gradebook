<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
$router->get('/key', function() use ($router) {
    return str_random(32);
});

$router->get('foo', function () use ($router) {
    return 'Hello World';
});

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('report/{userId}/{courseId}', 'ReportController@index');
$router->get('checkuser/{userId}/{courseId}', 'ReportController@checkuser');
$router->get('report-tpa', 'ReportTpaController@index');
$router->get('lk/{id}/{courseId}', 'ReportLKController@show');
$router->get('disc/{id}/{courseId}', 'DiscController@index');
$router->get('report-pdf/{userId}/{courseId}', 'ReportController@pdf');
$router->get('lk-pdf/{id}/{courseId}', 'ReportLKController@pdf');
