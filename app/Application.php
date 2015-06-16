<?php
/**
 * User: anubis
 * Date: 16.06.15
 * Time: 14:55
 */

namespace app;

class Application extends \bc\cmf\Application {

    protected function initRoutes() {
        $this->addRouteGroup(new DefaultRouter($this));
    }

}