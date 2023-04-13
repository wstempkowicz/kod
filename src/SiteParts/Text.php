<?php

    namespace Src\Site;

    class Text
    {
        public function __construct(
            protected string $text,
            protected string $tagName = 'p',
        ){}
        
        public function __toString()
        {
            return '<'.$this->tagName.'>'.$this->text.'</'.$this->tagName.'>';
        }
    }