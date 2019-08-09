<?php

namespace HalloWorld\Controllers;


use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

class ContentController extends Controller
{
    public function sayHallo(Twig $twig):string
    {
        return $twig->render('HalloWorld::content.hallo');
    }
}
