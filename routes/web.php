<?php
/**
 * @var Klein $router
 */

use App\Controllers\SiteController;
use Klein\Klein;

$router->get('/?', action('SiteController@index'));
$router->post('/books/?', action('BookController@store'));
$router->post('/books/delete/[i:id]/?', action('BookController@delete'));