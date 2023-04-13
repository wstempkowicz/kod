<?php 

namespace Src\Site\FormElement;

define('INPUT_TYPE',[
    'button',
    'checkbox',
    'color',
    'date',
    'datetime-local',
    'email',
    'file',
    'hidden',
    'image',
    'month',
    'number',
    'password',
    'radio',
    'range',
    'reset',
    'search',
    'submit',
    'tel',
    'text',
    'time',
    'url',
    'week'
    ]
);

class Input
{
    
    public function __construct(
        protected string $name = '',
        protected string $type = 'text',
        protected Attributes $attributes,
    )
    {}

    public function __toString()
    {
        return $this->displayInput();
    }

    public function displayInput(){
        $this->checkInputType();
        $input = "<input name = \'$this->name\' type = \'$this->type\'";

        foreach($this->attributes as $name => $value)
        {
            $input.= " $name = \'$value\' ";
        }
        
        $input .= " >";

        return $input;
    }

    private function checkInputType(): bool {
        if(!in_array($this->type, INPUT_TYPE)){
            throw new \Exception('Wrong input type.');
        }
        return true;
    }
}
?>