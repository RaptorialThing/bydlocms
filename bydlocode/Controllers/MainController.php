<?php
/**
 * Created by PhpStorm.
 * User: rg
 * Date: 17.06.20
 * Time: 21:46
 */

namespace Bydlocode\Controllers;


class MainController
{
    public function main() {
        echo 'main';
    }

    public function sayHello(string $name) {
        echo 'Hello '.$name;
    }
}