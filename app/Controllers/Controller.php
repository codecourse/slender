<?php

namespace App\Controllers;

use DI\Container;

abstract class Controller
{
    /**
     * The container instance.
     *
     * @var Container
     */
    protected $c;

    /**
     * Set up controllers to have access to the container.
     *
     * @param Container $container
     */
    public function __construct(Container $container)
    {
        $this->c = $container;
    }
}
