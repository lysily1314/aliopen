<?php

namespace AliCrossopen;

use AliCrossopen\core\ContainerBase;
use AliCrossopen\functions\auth\Auth;
use AliCrossopen\functions\develop\Develop;
use AliCrossopen\functions\order\Logistics;
use AliCrossopen\functions\order\Order;
use AliCrossopen\functions\order\Pay;
use AliCrossopen\functions\order\Refund;
use AliCrossopen\functions\other\Other;
use AliCrossopen\functions\overseas\Overseas;
use AliCrossopen\functions\product\Product;
use AliCrossopen\provider\ProductProvider;
use AliCrossopen\provider\OrderProvider;
use AliCrossopen\provider\OtherProvider;
use AliCrossopen\provider\OverseasProvider;
use AliCrossopen\provider\AuthProvider;
//use AliCrossopen\provider\DevelopProvider;

/**
 * Class Application
 * @property Product product
 * @property Order order
 * @property Logistics logistics
 * @property Refund refund
 * @property Pay pay
 * @property Other other
 * @property Auth auth
 * @property Develop develop
 * @property Overseas overseas
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
