<?php
namespace LiZG\UmengPush\Umeng\Android;
use LiZG\UmengPush\Umeng\AndroidNotification;

class AndroidBroadcast extends AndroidNotification {
	function  __construct() {
		parent::__construct();
		$this->data["type"] = "broadcast";
	}
}