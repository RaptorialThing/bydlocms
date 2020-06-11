<?php
/**
 * Created by PhpStorm.
 * User: rg
 * Date: 11.06.20
 * Time: 20:15
 */

require __DIR__ . '/../vendor/autoload.php';

$l = new \Bydlocode\Models\Articles\Article("test");
echo $l::getName();