<?php
/**
 * Created by PhpStorm.
 * User: rg
 * Date: 11.06.20
 * Time: 20:51
 */
namespace Bydlocode\Models\Items;

use Bydlocode\Models\ActiveRecord\ActiveRecord;

class Item extends ActiveRecord
{
public static $name;

static function getName()  {
    return self::getByName("name");
}

}