<?php
defined('SITE_NAME') OR exit('access define');
/**
*
*/
class HomeController extends Controller
{
    public function index()
    {
        $this->view->render('home');
    }
}