<?php
namespace LiZG\UmengPush\Umeng\Ios;
use LiZG\UmengPush\Umeng\IOSNotification;

class IOSGroupcast extends IOSNotification {
	function  __construct() {
		parent::__construct();
		$this->data["type"] = "groupcast";
		$this->data["filter"]  = NULL;
	}
}