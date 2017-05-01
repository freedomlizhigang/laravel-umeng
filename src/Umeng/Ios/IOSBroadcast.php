<?php
namespace LiZG\UmengPush\Umeng\Ios;
use LiZG\UmengPush\Umeng\IOSNotification;

class IOSBroadcast extends IOSNotification {
	function  __construct() {
		parent::__construct();
		$this->data["type"] = "broadcast";
	}
}