<?php
/**
 * TOP API: taobao.wangwang.eservice.streamweigths.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-17 12:35:26
 */
class WangwangEserviceStreamweigthsGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.wangwang.eservice.streamweigths.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
