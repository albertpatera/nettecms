<?php
namespace App;

use Nette\Application\Routers\SimpleRouter;
use Nette\Application\Routers\Route;
use Nette\Application\Routers\RouteList;

/**
 * Router pro naší aplikaci kalkulačka.
 * @package App
 */
class RouterFactory
{
    /**
     * Vrací námi definovaný router.
     * @return SimpleRouter router
     */
    public static function createRouter()
    {
        // Nastavíme výchozí routování na náš presenter.
        //return new SimpleRouter('Login:default');

        $router = new RouteList();
        $router[] = new Route('[<url>]', 'Core:Article:default');
        return $router;
    }
}
