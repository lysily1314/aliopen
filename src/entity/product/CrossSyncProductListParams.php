<?php
namespace AliCrossopen\entity\product;

use AliCrossopen\entity\BaseEntityParams;
/**
 * 跨境场景下将商品加入铺货列表
 * Class CrossSyncProductListParams
 * @package AliCrossopen\entity
 */

class CrossSyncProductListParams extends BaseEntityParams{



	private $productIdList;

	/**
	 * CrossSyncProductListParams constructor.
	 * @param $productIdList
	 */
	public function __construct($productIdList)
	{
		$this->productIdList = $productIdList;
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