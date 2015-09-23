<?php

/**
 * @product Divalia Tiny CMS
 * @name Divalia S.A de C.V
 *
 * @author Alberto Ferrer
 *
 * @version 0.1
 */
class RoutingEngine
{
    public function Route()
    {
        $requestURI = explode('/', $_SERVER['REQUEST_URI']);
        $scriptName = explode('/', $_SERVER['SCRIPT_NAME']);
        for ($i = 0;$i < sizeof($scriptName);++$i) {
            if ($requestURI[$i] == $scriptName[$i]) {
                unset($requestURI[$i]);
            }
        }
        $Controller = array_values($requestURI);

        return $Controller;
    }
}
