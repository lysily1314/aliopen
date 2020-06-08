<?php
namespace AliCrossopen\entity\order;

use AliCrossopen\entity\BaseEntityParams;

/**
 * Class QueryPayWayParams
 * @package AliCrossopen\entity\order
 */
class QueryPayWayParams extends BaseEntityParams{


	private $orderId;

	/**
	 * QueryPayWayParams constructor.
	 * @param $orderId
	 */
	public function __construct($orderId){
		$this->orderId = $orderId;
	}


	/**
	 * @inheritDoc
	 */
	public function build()
	{
		return array_filter(get_object_vars($this), function ($val) {
			return !is_null($val);
		});
	}

}