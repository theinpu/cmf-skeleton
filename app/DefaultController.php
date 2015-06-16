<?php
/**
 * User: anubis
 * Date: 16.06.15
 * Time: 14:58
 */

namespace app;

use bc\cmf\Controller;

class DefaultController extends Controller {

    public function defaultPage() {
        echo "hello, world!";
    }

}