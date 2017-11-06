<?php
/**
 * TOP API: taobao.coin.activity.get request
 * 
 * @author auto create
 * @since 1.0, 2015.01.15
 */
class CoinActivityGetRequest
{
	/** 
	 * 淘金币活动ID
	 **/
	private $tbActivityId;
	
	private $apiParas = array();
	
	public function setTbActivityId($tbActivityId)
	{
		$this->tbActivityId = $tbActivityId;
		$this->apiParas["tb_activity_id"] = $tbActivityId;
	}

	public function getTbActivityId()
	{
		return $this->tbActivityId;
	}

	public function getApiMethodName()
	{
		return "taobao.coin.activity.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->tbActivityId,"tbActivityId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
