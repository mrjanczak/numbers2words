<?php

namespace js\tools\numbers2words\Twig;

use Twig\TwigFilter;
use js\tools\numbers2words\Speller;
use Twig\Extension\AbstractExtension;

class Spell extends \Twig\Extension\AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('spellShort', [$this, 'spellShort']),
        ];
    }

    public function spellShort($amount, $language, $currency)
    {
        return Speller::spellShort($amount, $language, $currency);
    }
}
