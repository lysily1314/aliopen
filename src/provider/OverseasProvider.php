<?php

namespace AliCrossopen\provider;

use AliCrossopen\core\Container;
use AliCrossopen\functions\overseas\Overseas;
use AliCrossopen\interfaces\Provider;

/**
 * Class OverseasProvider
 * @package AliCrossopen\provider
 */
class OverseasProvider implements Provider
{

    /**
     * 服务提供者
     * @param Container $container
     * @return mixed|void
     */
    public function serviceProvider(Container $container)
    {
        $container['overseas']  = function ($container) {
            return new Overseas($container);
        };
    }
}
