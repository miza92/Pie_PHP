<?php
namespace Core;

Router::connect('', ['controller' => 'User', 'action' => 'add']);
Router::connect('/', ['controller' => 'app', 'action' => 'index']);
Router::connect('/app/', ['controller' => 'app', 'action' => 'index']);
Router::connect('/user/', ['controller' => 'user', 'action' => 'index']);
Router::connect('/user/add', ['controller' => 'user', 'action' => 'add']);
Router::connect('/register', ['controller' => 'user', 'action' => 'add']);