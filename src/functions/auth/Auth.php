<?php
namespace AliCrossopen\functions\auth;

use AliCrossopen\core\BaseClient;
use AliCrossopen\entity\auth\{
	AddSubAccountsParams,
};


/**
 * 用户授权
 * @package AliCrossopen\functions\auth
 */
class Auth extends  BaseClient{

	/**
	 * 批量添加子账号授权
	 * @param \AliCrossopen\entity\auth\AddSubAccountsParams $addSubAccountsParams
	 * @return $this
	 */
	public function addSubAccountAuth( AddSubAccountsParams $addSubAccountsParams){
		$this->app->params = $addSubAccountsParams->build();
		$this->url_info    = 'system.oauth2:subaccount.auth.add-1';
		return $this;
	}

	/**
	 * 批量取消子账号授权
	 * @param \AliCrossopen\entity\auth\AddSubAccountsParams $addSubAccountsParams
	 * @return $this
	 */
	public function cancelSubAccountAuth(AddSubAccountsParams $addSubAccountsParams){
		$this->app->params = $addSubAccountsParams->build();
		$this->url_info    = 'system.oauth2:subaccount.auth.cancel-1';
		return $this;
	}

	/**
	 * 批量查询子账号授权
	 * @param \AliCrossopen\entity\auth\AddSubAccountsParams $addSubAccountsParams
	 * @return $this
	 */
	public function querySubAccountAuth(AddSubAccountsParams $addSubAccountsParams){
		$this->app->params = $addSubAccountsParams->build();
		$this->url_info    = 'system.oauth2:subaccount.auth.list-1';
		return $this;
	}


}