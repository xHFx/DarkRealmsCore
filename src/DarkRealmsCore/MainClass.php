<?php

namespace DarkRealmsCore;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerRespawnEvent;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\TextFormat;

class MainClass extends PluginBase implements Listener{

	public function onLoad(){
		$this->getLogger()->info(TextFormat::WHITE . "DarkRealmsCore has been loaded!");
	}

	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getLogger()->info(TextFormat::DARK_GREEN . "DarkRealmsCore has been enabled!");
    }

	public function onDisable(){
		$this->getLogger()->info(TextFormat::DARK_RED . "DarkRealmsCore has been disabled!");
	}

	public function onCommand(CommandSender $sender, Command $command, $label, array $args){
		switch($command->getName()){
			case "donate":
				$sender->sendMessage("Hello".$sender->getName()."!");
				$sender->sendMessage("God - 5$");
				$sender->sendMessage("Lord - 10$");
				$sender->sendMessage("OverLord - 20$!");
				return true;
			default:
				return false;
		}
	}
