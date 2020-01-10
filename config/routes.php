<?php

use travel\Router;


Router::add('^tour/(?P<alias>[a-z0-9-]+)/?$', ['controller' => 'Product', 'action' => 'view']);
Router::add('^new/(?P<alias>[a-z0-9-]+)/?$', ['controller' => 'New', 'action' => 'post']);
Router::add('^category/tours$', ['controller' => 'Category', 'action' => 'tours']);
Router::add('^category/services$', ['controller' => 'Category', 'action' => 'services']);
Router::add('^category/news$', ['controller' => 'Category', 'action' => 'news']);
Router::add('^category/fetch$', ['controller' => 'Category', 'action' => 'fetch']);


//default routes
Router::add('^admin$', ['controller' => 'Main', 'action' => 'index', 'prefix' => 'admin']);
Router::add('^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['prefix' => 'admin']);


Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');

