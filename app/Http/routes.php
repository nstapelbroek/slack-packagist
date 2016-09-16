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

$app->get('/', 'SlackController@home');
$app->get('installed', 'SlackController@installed');
$app->get('hook', 'SlackController@hook');
$app->get('auth', 'SlackController@auth');
