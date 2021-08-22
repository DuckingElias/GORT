<?php
namespace Gort\Core;

use Klein\Klein;
use ORM;
use RedBeanPHP\R;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Application {

    public static Application $INSTANCE;

    public Klein $klein;
    private Environment $twig;

    public function __construct() {
        // Set instance for static access.
        Application::$INSTANCE = $this;

        // Initalize router.
        $this->klein = new \Klein\Klein();

        // Initalize the template engine.
        $this->twig = new Environment(new FilesystemLoader(__DIR__ . "/../Views/"), [
            // If debug is enabled, disable the cache.
            "cache" => DEBUG ? false : __DIR__ . "/../../cache"
        ]);

        // Expose global variables for the template engine.
        $this->twig->addGlobal("url_path", URL_PATH);
        $this->twig->addGlobal("path", $_SERVER["REQUEST_URI"]);
    }

    public function render(string $template, $data = []) {
        print $this->twig->render($template, $data);
    }

    public function start() {
        // Initalize session.
        session_start();

        // Setup connection for the RedBeanPHP ORM.
        R::setup( MYSQL_URI, MYSQL_USERNAME, MYSQL_PASSWORD);

        // Include helper.
        include_once __DIR__ . "/Helper.php";

        // Add routes.
        include_once __DIR__ . "/Routing.php";

        // Start the router.
        $this->klein->dispatch();
    }

}
