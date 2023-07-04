<?php

namespace Src;

class MenuNames
{
    const MENU_NAMES = ['O nas', 'Oferta', 'Cennik', 'Kontakt'];
    public $names = [];

    public function __construct(
        array $names = [],
    )
    {
        $this->names = self::MENU_NAMES;
    } 
    
}