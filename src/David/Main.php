<?php

namespace David\YT;
 
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;

{
 class Main extends PluginBase implements Listener {
    public function onEnable() 
    {
        $this->getLogger()->info("[YT] Aktiviert.");
    }

    public $fts;
    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool
    {
        $fts = "[YT]";
        $this->fts = $fts;
        if ($cmd->getName() == "YT") {
            if ($sender instanceof Player) {
                if ($sender->hasPermission("yt.cmd")) {
                    $sender->sendMessage("§4YT§r >> §6Du Brauchst 110 Abos um denn YT Rang Zu Bekommen");
                    return true;
                } else {
                    $sender->sendMessage("Du hast keine Rechte diesen Befehl zu benutzen");
                    return true;
                } 
            }
            return true;
         }
            return true;
       }
      }
