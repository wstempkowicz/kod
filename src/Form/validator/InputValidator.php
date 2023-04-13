<?php 

namespace Form\Validator;

use Src\Site\FormElement\Input;

class InputValidator
{
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
      
    public function __construct(
        public $input = '',
    )
    {
        
    }

    public function checkType(Input $input): bool{
        if()
    }
}