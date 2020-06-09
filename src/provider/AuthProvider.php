<?php

namespace AliCrossopen\provider;

use AliCrossopen\core\Container;
use AliCrossopen\functions\auth\Auth;
use AliCrossopen\interfaces\Provider;

/**
 * Class OtherProvider
 * @package AliCrossopen\provider
 * @property \AliCrossopen\functions\auth\Auth auth
 */
class AuthProvider implements Provider
{

    /**
     * 服务提供者
     * @param Container $container
     * @return mixed|void
     */
    public function serviceProvider(Container $container)
    {
        $container['auth']  = function ($container) {
            return new Auth($container);
        };
    }
}
