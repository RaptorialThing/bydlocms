<?php
/**
 * Created by PhpStorm.
 * User: rg
 * Date: 15.06.20
 * Time: 16:14
 */

namespace Bydlocode\Models\ActiveRecord;


use Bydlocode\Services\Db\Db;

class ActiveRecord
{
    public $id;

    public static $propsArr = [];

    public static function getByName($name) {

        return static::$propsArr[$name];
    }

    public static function setByName($propName,$value) {

        static::$propsArr[$propName] = $value;

    }

    public static function __callstatic($name,$args) {
        return static::$propsArr[$name];
    }

    public function create() {
        $db = Db::getInstance();
        $db->create(static::$instance);
    }
}