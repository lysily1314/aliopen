<?php

namespace AliCrossopen\provider;

use AliCrossopen\core\Container;
use AliCrossopen\functions\develop\Develop;
use AliCrossopen\interfaces\Provider;

/**
 * Class DevelopProvider
 * @package AliCrossopen\provider
 * @property \AliCrossopen\functions\develop\Develop develop
 */
class DevelopProvider implements Provider
{

    /**
     * 服务提供者
     * @param Container $container
     * @return mixed|void
     */
    public function serviceProvider(Container $container)
    {
        $container['develop']  = function ($container) {
            return new Develop($container);
        };
    }
}
