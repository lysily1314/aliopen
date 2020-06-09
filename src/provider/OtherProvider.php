<?php

namespace AliCrossopen\provider;

use AliCrossopen\core\Container;
use AliCrossopen\functions\other\Other;
use AliCrossopen\interfaces\Provider;

/**
 * Class OtherProvider
 * @package AliCrossopen\provider
 * @property \AliCrossopen\functions\other\Other other
 */
class OtherProvider implements Provider
{

    /**
     * 服务提供者
     * @param Container $container
     * @return mixed|void
     */
    public function serviceProvider(Container $container)
    {
        $container['other']  = function ($container) {
            return new Other($container);
        };
    }
}
