<?php

    class MainPageView
    {
        
        public Text $content;

    }
    class Header
    {
        public Text $header = new Text('header.php');
        public Menu $topMenu = new Menu('top.php'); 
    }
    class Footer
    {
        public Text $footer = new Text('footer.php');
    }