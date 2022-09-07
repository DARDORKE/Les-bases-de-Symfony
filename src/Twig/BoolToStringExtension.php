<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class BoolToStringExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            new TwigFilter('boolToString', [$this, 'boolToString']),
        ];
    }

    public function boolToString(bool $bool): string
    {
        return $bool ? 'Oui' : 'Non';
    }
}