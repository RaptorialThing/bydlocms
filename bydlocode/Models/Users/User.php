<?php
/**
 * Created by PhpStorm.
 * User: rg
 * Date: 17.06.20
 * Time: 17:15
 */

namespace Bydlocode\Models\Users;


use Bydlocode\Models\ActiveRecord\ActiveRecord;

class User extends ActiveRecord
{
    public  $name;

    public  $email;

    public  $type;

    public  $table = 'users';

    public $columns = ['id','name','email','type'];

    public static $instance;

    public function __construct($name,$type,$email) {
        $this->name = $name;
        $this->email = $email;
        $this->type = $type;
        self::$instance = $this;
    }

}