<?php

namespace nid;

class main extends \pocketmine\plugin\PluginBase{

	public function onLoad(){
		$server = \pocketmine\Server::getInstance();
		$worlddir = "worlds/";

		$count = 0;
		foreach (scandir($worlddir) as $value) {
			if(is_dir($worlddir . $value) && ($value !== "." && $value !== "..") ){
				$server->loadLevel($value) && $count++;
			}
		}

		$this->getLogger()->info("§aLoaded $count Worlds");
	}

}
