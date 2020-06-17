<?php
/**
 * Created by PhpStorm.
 * User: rg
 * Date: 11.06.20
 * Time: 20:15
 */

require __DIR__ . '/../vendor/autoload.php';

try {

    $controller = new \Bydlocode\Controllers\MainController();

    $route = $_GET['route'] ?? '';
    $routes = require __DIR__ . '/../bydlocode/routes.php';

    $isRouteFind = false;
    foreach ($routes as $pattern => $controllerAndAction) {
        preg_match($pattern,$route,$matches);
        if (!empty($matches)) {
            $isRouteFind = true;
            break;
        }
    }

    if (!$isRouteFind) {
        echo 'Страница не найдена';
        return;
    }

    unset($matches[0]);

    $controllerName = $controllerAndAction[0];
    $actionName = $controllerAndAction[1];

    $controller = new $controllerName();
    $controller->$actionName(...$matches);

} catch (DbException $e) {
    print('Error db connect '.$e->getMessage());
} catch (Exception $e) {
    print('Error '.$e->getMessage());
}