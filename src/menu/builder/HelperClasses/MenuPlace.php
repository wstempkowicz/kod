<?php
namespace Src;

class MenuPlace
{

    public function __construct(
        private string $place = 'top',
    )
    {}

    public function getPlace(){
        return $this->place;
    }
}
