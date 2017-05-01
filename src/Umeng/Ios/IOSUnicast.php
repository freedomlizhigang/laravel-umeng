<?php
namespace LiZG\UmengPush\Umeng\Ios;
use LiZG\UmengPush\Umeng\IOSNotification;

class IOSUnicast extends IOSNotification {
	function __construct() {
		parent::__construct();
		$this->data["type"] = "unicast";
		$this->data["device_tokens"] = NULL;
	}

}