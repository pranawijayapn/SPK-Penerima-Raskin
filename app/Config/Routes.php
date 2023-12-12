<?php

use CodeIgniter\Router\RouteCollection;



/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/Home/callviewjenisusaha', 'Home::callviewjenisusaha');
$routes->get('/Home/callviewdatawarga', 'Home::callviewdatawarga');
$routes->get('/Home/callviewdatakriteria', 'Home::callviewdatakriteria');
$routes->get('/Home/callviewdataskala', 'Home::callviewdataskala');
$routes->get('/Home/callviewhitung', 'Home::callviewhitung');
$routes->get('/Home/callviewnormalisasi', 'Home::callviewnormalisasi');
$routes->get('/Home/callviewranking', 'Home::callviewranking');
$routes->get('/Home/callviewkeputusan', 'Home::callviewkeputusan');
$routes->get('/Home/callviewmatrixkeputusan', 'Home::callviewmatrixkeputusan');
$routes->get('/Home/callviewdatavektors', 'Home::callviewdatavektors');
