<?php

namespace AliCrossopen\interfaces;

use AliCrossopen\core\Container;

/**
 * Interface Provider
 * @package AliCrossopen\interfaces
 */
interface Provider
{
    /**
     * @param Container $container
     * @return mixed
     */
    public function serviceProvider(Container $container);
}
