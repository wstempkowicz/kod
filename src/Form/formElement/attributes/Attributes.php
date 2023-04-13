<?php

namespace Src\Site\FormElement;

class Attributes{
    
    public function __construct(
        private array $attributes = [],
    ) {}

    public function __toString(){
        $result = '';
        foreach($this->attributes as $name => $value){
            $result .= " $name = \'$value\' ";
        }

        return $result;
    }
}

