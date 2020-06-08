<?php
namespace AliCrossopen\entity\auth;


use AliCrossopen\entity\BaseEntityParams;

/**
 * Class AddSubAccountsParams
 * @package AliCrossopen\entity\auth
 */
class AddSubAccountsParams extends BaseEntityParams{


	private $subUserIdentityList;

	/**
	 * AddSubAccountsParams constructor.
	 * @param $subUserIdentityList
	 */
	public function __construct($subUserIdentityList){
		$this->subUserIdentityList = $subUserIdentityList;
	}

	/**
	 * @inheritDoc
	 */
	public function build(){
		return array_filter(get_object_vars($this), function ($val) {
			return !is_null($val);
		});
	}

}