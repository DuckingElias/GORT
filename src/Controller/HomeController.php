<?php
namespace Gort\Controller;

use Gort\Core\Controller;
use RedBeanPHP\R;

class HomeController extends Controller {

    public function index() {
        render('home.twig', [
            "page" => "Home"
        ]);
    }

}