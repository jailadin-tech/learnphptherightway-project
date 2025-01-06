<?php

namespace App\MyClasses;

class Router
{
    private array $register;

    public function register(string $method,  string $route, array|callable $params)
    {
        $this->register[$method][$route] = $params;
    }
    public function get(string $route, array|callable $params)
    {
        $this->register('get', $route, $params);
    }

    public function resolve() {}
}
