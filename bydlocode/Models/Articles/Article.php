<?php
/**
 * Created by PhpStorm.
 * User: rg
 * Date: 11.06.20
 * Time: 20:51
 */
namespace Bydlocode\Models\Articles;

class Article
{
public static $name;

function __construct(string $name) {
    self::$name = $name;
}

static function getName() :string {
    return self::$name;
}

}