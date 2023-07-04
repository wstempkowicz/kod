<?php
include __PATH__.'/Menu/Menu.php';


foreach (glob("Menu/HelperClasses/*.php") as $filename)
{
    include $filename;
}
foreach (glob("Menu/Validator/*.php") as $filename)
{
    include $filename;
}

$menu = new Menu();