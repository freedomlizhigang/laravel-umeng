<?php
namespace LiZG\UmengPush\Umeng\Android;
use LiZG\UmengPush\Umeng\AndroidNotification;

class AndroidGroupcast extends AndroidNotification {
	function  __construct() {
		parent::__construct();
		$this->data["type"] = "groupcast";
		$this->data["filter"]  = NULL;
	}
}