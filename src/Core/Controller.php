<?php
namespace Gort\Core;

class Controller {

    public function render(string $template, $data = []) {
        print Application::$INSTANCE->render($template, $data);
    }

}