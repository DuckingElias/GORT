<?php

function render(string $template, $data = []) {
    \Gort\Core\Application::$INSTANCE->render($template, $data);
}
