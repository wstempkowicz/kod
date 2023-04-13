<?php 

namespace Src\Site\FormElement;

use Src\Site\Text;

class Option
{   
    public string $view = ''; 
    
    public function __construct(
        protected string $value = $value,
        protected Text $optionText = $optionText,
        protected array $attributes = $attributes,
    )
    {
        $this->view = $this -> setOptionView();
    }

    public function setOptionView()
    {
        $option = "<option value = \'$this->value\'";
        
        foreach($this->attributes as $name => $value)
        {
            $option.= " $name = \'$value\' ";
        }

        $option .= "> $this->optionText </option>";

        return $option;
    }

    public function __toString()
    {
        return $this->view;
    }
}

class OptionGroup
{
    private string $view = '';

    public function addOption (Option $option): void{
        $this->view .= $option;
    }

    public function __toString()
    {
        return $this->view;
    } 
}

class Select
{
    private OptionGroup $options;
    
    public function __construct(
        protected string $name = $name,
        protected array $attributes = $attributes,
    )
    {}

    public function displaySelect(){
        $select = "<select name = \'$this->name\' ";

        foreach($this->attributes as $name => $value)
        {
            $select.= " $name = \'$value\' ";
        }
        
        $select .= " >";
        $select .= $this->options;

        return $select;
    }
    public function addOptions(OptionGroup $options): void {
        $this -> options = $options;
    }

}