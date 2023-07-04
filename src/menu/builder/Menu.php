<?php

namespace Src;

class Menu
{
    
    public function __construct(
        private MenuNames $names,
        private MenuPlace $place
    ) 
    {}
    public function setNames(MenuNames $names): void{
        $this->names = $names;
    }
    public function getNames(): MenuNames{
        return $this->names->getNames();
    }
    public function getPlace(): MenuPlace{
        return $this->place->getPlace();
    }

}

