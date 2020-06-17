<?php
/**
 * Created by PhpStorm.
 * User: rg
 * Date: 11.06.20
 * Time: 20:15
 */

require __DIR__ . '/../vendor/autoload.php';

try {
    $alex = new \Bydlocode\Models\Users\User('Alex','vendor','alex@postmate.com');

    $alex->create();

} catch (DbException $e) {
    print('Error db connect '.$e->getMessage());
} catch (Exception $e) {
    print('Error '.$e->getMessage());
}