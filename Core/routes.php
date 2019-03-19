<?php
namespace Core;

Router::connect('/', ['controller' => 'app', 'action' => 'index']);
Router::connect('/user', ['controller' => 'user', 'action' => 'index']);
Router::connect('/app', ['controller' => 'app', 'action' => 'index']);
Router::connect('/user/add', ['controller' => 'user', 'action' => 'add']);

Router::connect('/register', ['controller' => 'user', 'action' => 'register']);
Router::connect('/login', ['controller' => 'user', 'action' => 'login']);
//Router::connect('/register', ['controller' => 'user', 'action' => 'add']);
//Router::connect('/login', ['controller' => 'user', 'action' => 'add']);
//Router::connect('/show', ['controller' => 'user', 'action' => 'add']);

Router::connect('user/register', ['controller' => 'user', 'action' => 'register']);
Router::connect('user/login', ['controller' => 'user', 'action' => 'login']);
//Router::connect('/loginAction', ['controller' => 'user', 'action' => 'login']);
//Router::connect('/registerAction', ['controller' => 'user', 'action' => 'register']);