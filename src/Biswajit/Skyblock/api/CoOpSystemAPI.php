<?php

namespace Biswajit\Skyblock\api;

use pocketmine\Server;
use pocketmine\player\Player;

use Biswajit\Skyblock\Skyblock;

class CoOpSystemAPI
{
  
  public function __construct()
  {
  }
  
  public function getSource(): Skyblock
  {
    return Skyblock::getInstance();
  }
  
}
