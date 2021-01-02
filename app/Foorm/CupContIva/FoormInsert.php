<?php

namespace App\Foorm\CupContIva;

use Gecche\Cupparis\App\Foorm\Base\FoormInsert as BaseFoormInsert;
use App\Foorm\CupContFattElTrait;

class FoormInsert extends BaseFoormInsert
{
    use CupContFattElTrait;
}
