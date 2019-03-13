<?php
namespace Core;

Router::connect('/', ['controller' => 'app', 'action' => 'index']);
Router::connect('/user', ['controller' => 'user', 'action' => 'index']);
Router::connect('/register', ['controller' => 'user', 'action' => 'add']);
Router::connect('/app', ['controller' => 'app', 'action' => 'index']);
Router::connect('/user/add', ['controller' => 'user', 'action' => 'add']);
Router::connect('/registerAction', ['controller' => 'user', 'action' => 'register']);
Router::connect('/loginAction', ['controller' => 'user', 'action' => 'login']);
Router::connect('/test', ['controller' => 'app', 'action' => 'test']);
