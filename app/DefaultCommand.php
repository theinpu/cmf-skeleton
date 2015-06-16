<?php
/**
 * User: anubis
 * Date: 16.06.15
 * Time: 14:56
 */

namespace app;

use bc\cmf\Command;

class DefaultCommand extends Command {

    const Controller = 'app\\DefaultController';

    public function __construct($method) {
        parent::__construct(self::Controller, $method);
    }

    public static function defaultPage() {
        return new self('defaultPage');
    }

}