<?php
/**
 * User: anubis
 * Date: 16.06.15
 * Time: 14:55
 */

namespace app;


use bc\cmf\RouteGroup;

class DefaultRouter extends RouteGroup {

    protected function getBaseUrl() {
        return '';
    }

    public function initRoutes() {
        $this->addRoute('', DefaultCommand::defaultPage(), array('get'));
    }
}