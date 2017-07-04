<?php

namespace nlog\NLOGFixTime;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener{

	 public function onEnable() {
		date_default_timezone_set("Asia/Seoul");
		$this->getLogger()->alert("콘솔의 시간대를 UTC +9(서울)로 지정하였습니다.");
	 }
 }
?>