<?php


namespace App\Startup;


use App\Core\Abstracts\Singleton;
use App\Core\Interfaces\IProvider;
use Klein\Klein;

final class RouterProvider extends Singleton implements IProvider
{
    protected static $running = false;
    protected static $router;

    private function __construct() {
        self::$router = new Klein();
        $this->mapRoutes('web');
        self::$router->dispatch();
    }

    static function init() {
        self::start(function () {
            new self();
        });
    }

    private function mapRoutes(string $name) {
        $router = self::$router;
        require_once path(config('router.path') . "/{$name}.php");
    }

    static function request() {
        return self::$router->request();
    }

    static function response() {
        return self::$router->response();
    }
}