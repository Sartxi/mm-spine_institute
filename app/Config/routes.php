<?php
Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
Router::connect('/about', array('controller' => 'pages', 'action' => 'about'));
Router::connect('/contact', array('controller' => 'pages', 'action' => 'contact'));

CakePlugin::routes();
require CAKE . 'Config' . DS . 'routes.php';
