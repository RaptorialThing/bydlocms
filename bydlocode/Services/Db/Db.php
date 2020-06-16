<?php
/**
 * Created by PhpStorm.
 * User: rg
 * Date: 16.06.20
 * Time: 20:03
 */

namespace Bydlocode\Services\Db;


class Db
{
    public static $instance = null;

    private function __construct() {
        include(__DIR__.'/../../config.php');
        print_r($config);
    }

    public  static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new Db();
        }
        return self::$instance;
    }
}