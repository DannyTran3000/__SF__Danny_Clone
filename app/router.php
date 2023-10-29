<?php
require_once(ROOT_PATH . 'controllers/AuthController.php');
require_once(ROOT_PATH . 'controllers/ContactController.php');
require_once(ROOT_PATH . 'controllers/PageController.php');

$auth_controller = new AuthController();
$contact_controller = new ContactController();
$page_controller = new PageController();
class Router
{
  public function dispatch($method, $p, $q)
  {
    $routes = [
      '/' => [
        'GET' => function (...$args) {
          global $page_controller;
          return $page_controller->index(...$args);
        }
      ],
      '/contact' => [
        'POST' => function ($params, $queries) {
          global $contact_controller;
          return $contact_controller->index();
        }
      ],
      '/login' => [
        'GET' => function (...$args) {
          global $page_controller;
          return $page_controller->login(...$args);
        },
        'POST' => function ($params, $queries) {
          global $auth_controller;
          return $auth_controller->login();
        }
      ],
    ];


    $is_exist_method = isset($routes[$p]) && array_key_exists(strtoupper($method), $routes[rtrim($p)]);

    if ($is_exist_method) {
      $routes[rtrim($p)][strtoupper($method)]($p, $q);
    } else {
      echo "Page not found";
    }
  }
}