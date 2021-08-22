<?php
use Gort\Core\Application;
use Gort\Controller\HomeController;
use Gort\Controller\BookController;

$klein =& Application::$INSTANCE->klein;

$klein->get("/", function() {
    (new HomeController())->index();
});

$klein->get("/books", function() {
    (new BookController())->all();
});