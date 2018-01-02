<?php

namespace BetterMining;

use pocketmine\entity\Effect;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\Player;
use pocketmine\utils\TextFormat as Color;
use pocketmine\plugin\PluginBase;

class BetterMining extends PluginBase{
    public function onLoad()
    {
        $this->getLogger()->info(Color::DARK_RED . "The plugin is ready to go!");
    }
    
    public function onEnable()
    {
        $this->getLogger()->info(Color::GOLD . "BetterMining enabled! Made by Leaked Plugin?");
        $this->getLogger()->info(Color::GREEN . "This plugin is very useful for mining servers! :D");
    }
    
    public function onJoin(PlayerJoinEvent $event){
        $player = $event->getPlayer();
        $name = $player->getPlayer();
        if($player instanceof Player){
            $player->addEffect(Effect::getEffect(3));
            $player->addEffect(Effect::getEffect(16));
            $player->addEffect(Effect::getEffect(23));
            $player->getEffect(3)->setAmplifier(5);
            $player->getEffect(16)->setAmplifier(5);
            $player->getEffect(23)->setAmplifier(10);
            $player->getEffect(3)->setDuration(20000);
            $player->getEffect(16)->setDuration(20000);
            $player->getEffect(23)->setDuration(20000);
            $player->sendMessage(Color::DARK_PURPLE . "Hey " . $name . ", you received some effects for mining easier! :D");
        }
    }
}
