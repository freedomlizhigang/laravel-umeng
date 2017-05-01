<?php
namespace LiZG\UmengPush\Umeng\Android;
use LiZG\UmengPush\Umeng\AndroidNotification;

class AndroidUnicast extends AndroidNotification {
	function __construct() {
		parent::__construct();
		$this->data["type"] = "unicast";
		$this->data["device_tokens"] = NULL;
	}

}