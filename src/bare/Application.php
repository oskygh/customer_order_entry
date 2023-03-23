<?php

namespace src\bare;

class Application
{
    public Router $router;
    public function __construct()
    {
        $this->router = new Router();
    }
}