<?php

namespace Src;

class ValidatorMenu
{
    const MENU_PLACE = [
        'TOP',
        'LEFT',
        'RIGHT',
        'BOTTOM'
    ];

    public function __construct(
        Menu $menu
    )
    {
        if(in_array(strtoupper($menu->getPlace()), MENU_PLACE)){
            throw Exception('Nieprawidłowe położenie menu');
        }
    }
}