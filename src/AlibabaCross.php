<?php

namespace AliCrossopen;

use AliCrossopen\core\ContainerBase;
use AliCrossopen\provider\ProductProvider;
use AliCrossopen\provider\OrderProvider;
use AliCrossopen\provider\OtherProvider;
use AliCrossopen\provider\OverseasProvider;
use AliCrossopen\provider\AuthProvider;
//use AliCrossopen\provider\DevelopProvider;

/**
 * Class Application
 * @property \AliCrossopen\functions\product\Product product
 * @property \AliCrossopen\functions\order\Order order
 * @property \AliCrossopen\functions\order\Logistics logistics
 * @property \AliCrossopen\functions\order\Refund refund
 * @property \AliCrossopen\functions\order\Pay pay
 * @property \AliCrossopen\functions\other\Other other
 * @property \AliCrossopen\functions\auth\Auth auth
 * @property \AliCrossopen\functions\develop\Develop develop
 * @property \AliCrossopen\functions\overseas\Overseas overseas
 */
class AlibabaCross extends ContainerBase
{
    /**
     * AlibabaClient constructor.
     * @param array $params 应用级参数
     */
    public function __construct($params = array())
    {
        parent::__construct($params);
    }

    /**
     * 服务提供者
     * @var array
     */
    protected $provider = [
	    OrderProvider::class,
        ProductProvider::class,
	    OtherProvider::class,
	    OverseasProvider::class,
	    AuthProvider::class,
	    //DevelopProvider::class
    ];
}
