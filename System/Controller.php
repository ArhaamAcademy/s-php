<?php
defined('SITE_NAME') OR exit('access define');

class Controller
{
    public function __construct()
    {
        $this->view = new View();
    }
}