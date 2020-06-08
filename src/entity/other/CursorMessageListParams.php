<?php
namespace AliCrossopen\entity\other;


use AliCrossopen\entity\BaseEntityParams;

/**
 * Class CursorMessageListParams
 * @package AliCrossopen\entity\other
 * @property \AliCrossopen\entity\other\CursorMessageListParams $createStartTime
 * @property \AliCrossopen\entity\other\CursorMessageListParams $createEndTime
 * @property \AliCrossopen\entity\other\CursorMessageListParams $quantity
 * @property \AliCrossopen\entity\other\CursorMessageListParams $type
 * @property \AliCrossopen\entity\other\CursorMessageListParams $userInfo
 */

class CursorMessageListParams extends BaseEntityParams{

	/**
	 * 消息创建时间查找范围开始
	 * @var string
	 */
	private $createStartTime;
	/**
	 * 消息创建时间查找范围结束
	 * @var string
	 */
	private $createEndTime;
	/**
	 * 每次取的数据量，范围20-200，默认20
	 * @var int
	 */
	private $quantity;
	/**
	 * 消息类型
	 * @var string
	 */
	private $type;
	/**
	 * 用户Id
	 * @var string
	 */
	private $userInfo;


	/**
	 * @param $createStartTime
	 * @return $this
	 */
	public function setCreateStartTime($createStartTime){
		$this->createStartTime = $createStartTime;
		return $this;
	}

	/**
	 * @param $createEndTime
	 * @return $this
	 */
	public function setCreateEndTime($createEndTime){
		$this->createEndTime = $createEndTime;
		return $this;
	}

	/**
	 * @param $quantity
	 * @return $this
	 */
	public function setQuantity($quantity){
		$this->quantity = $quantity;
		return $this;
	}

	/**
	 * @param $type
	 * @return $this
	 */
	public function setType($type){
		$this->type = $type;
		return $this;
	}

	/**
	 * @param $userInfo
	 * @return $this
	 */
	public function setUserInfo($userInfo){
		$this->userInfo = $userInfo;
		return $this;
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