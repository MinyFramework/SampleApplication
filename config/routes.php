<?php

use Miny\Router\Router;

return function (Router $router) {
    $router->root()->set(
        array(
            'controller' => 'documents'
        )
    );
    $router->get('{path:.*?\.md}')->set(
        array(
            'controller' => 'documents',
            'action'     => 'show'
        )
    );
    $router->get('{path:.*?}')->set(
        array(
            'controller' => 'documents'
        )
    );
};
