<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// $routes->get('/form', 'Form::index');
// $routes->post('/insert', 'Users::insert');
// $routes->get('/list', 'Users::list');
$routes->get('/form', 'AjoutPersonne::index');
$routes->post('/insert', 'GestionEtudiant::insert');
$routes->get('upload1', 'Upload::index');          // Add this line.
$routes->post('upload1/upload', 'Upload::upload'); // Add this line.

$routes->get('/inscription', 'GestionEtudiant::inscription');
$routes->get('/search', 'GestionEtudiant::search');
$routes->get('/someoneregister', 'GestionEtudiant::someoneregister');
$routes->get('/listsomeone', 'GestionEtudiant::listsomeone');
$routes->post('/form_inscription', 'GestionEtudiant::form_inscription');
