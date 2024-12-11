<?php
use CodeIgniter\Router\RouteCollection;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('chart', 'Home::chart');
$routes->get('checkout', 'Home::checkout');
$routes->get('search', 'Home::search');
$routes->get('admin/transaksi', 'Home::transaksi');
$routes->post('submit', 'Home::submit');