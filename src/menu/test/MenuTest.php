<?php
    declare(strict_types=1);
    
    namespace Src;

    require_once __DIR__.'/../src/Menu.php';
    require_once __DIR__.'/../src/HelperClasses/MenuNames.php';
    require_once __DIR__.'/../src/HelperClasses/MenuPlace.php';
    require_once __DIR__.'/../src/Validator/ValidatorMenu.php';

    use PHPUnit\Framework\TestCase;
    use Src\Menu;

    class MenuTest extends TestCase
    {
        public function testMenuPlaces(){

            $names = new MenuNames();
            $place = new MenuPlace('top');
            $place1 = new MenuPlace('left');
            $place2 = new MenuPlace('right');
            $place3 = new MenuPlace('bottom');
            $place4 = new MenuPlace('middle');
            $place5 = new MenuPlace();


            $menu = new Menu($names , $place);
            $menu1 = new Menu($names , $place1);
            $menu2 = new Menu($names , $place2);
            $menu3 = new Menu($names , $place3);
            $menu4 = new Menu($names , $place4);
            $menu5 = new Menu($names , $place5);
            
            $this->assertContains($menu->getPlace(), ValidatorMenu::MENU_PLACE);
            $this->assertContains($menu1->getPlace(), ValidatorMenu::MENU_PLACE);
            $this->assertContains($menu2->getPlace(), ValidatorMenu::MENU_PLACE);
            $this->assertContains($menu3->getPlace(), ValidatorMenu::MENU_PLACE);
            $this->assertNotContains($menu4->getPlace(), ValidatorMenu::MENU_PLACE);
            $this->assertContains($menu5->getPlace(), ValidatorMenu::MENU_PLACE);
        }
    }