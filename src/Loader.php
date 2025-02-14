<?php

declare(strict_types=1);

namespace SexMC\IsEvenAPI;

use pocketmine\plugin\PluginBase;
use SexMC\IsEvenAPI\IsEvenAPI;

class Loader extends PluginBase {

    private IsEvenAPI $isEvenAPI;

    public function onEnable(): void {
        $this->isEvenAPI = new IsEvenAPI();
    }

    public function getIsEvenAPI(): IsEvenAPI {
        return $this->isEvenAPI;
    }
}
