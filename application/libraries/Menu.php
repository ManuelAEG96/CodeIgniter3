<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu {
        private $opc_menu;
        public function __construct($arr)
        {
            $this->opc_menu = $arr;
        }

        public function construirMenu()
        {
            $temp_menu = "<nav><ul>";
            foreach ($this->opc_menu as $option) {
                $temp_menu .= "<li>".$option."</li>";
            }
            $temp_menu .= "</ul></nav>";
            return $temp_menu;
        }
}