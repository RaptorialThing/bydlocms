<?php
/**
 * Created by PhpStorm.
 * User: rg
 * Date: 16.06.20
 * Time: 20:03
 */

namespace Bydlocode\Services\Db;


use Bydlocode\Models\Users\User;
use Bydlocode\Services\Error\DbException;

trait DbFunctions {
    function getConnection() {
        if (is_null(Db::$pdo)) {
            Db::getInstance();
        }
        return Db::$instance;
    }
}

class Db
{
    use DbFunctions;

    public static $instance = null;
    public static $pdo = null;

    private function __construct() {
        $config = (require __DIR__.'/../../config.php')['db'];
        $dsn = "mysql:host=".$config['host'].";dbname=".$config['name'].";charset=".$config['charset'];
        $options = [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_CLASS,
            \PDO::ATTR_EMULATE_PREPARES => false,
        ];

        try {
            $pdo = new \PDO($dsn,$config['user'],$config['pass'],$options);
            self::$pdo = $pdo;
        } catch (\PDOException $e) {
            throw new DbException($e->getMessage(),(int)$e->getCode());
        }

    }

    public  static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new Db();
        }
        return self::$instance;
    }

    public function query(string $sql,$params = []): ?array {
        $sth = static::$pdo->prepare($sql);
        $result = $sth->execute($params);

        if (false === $result) {
            return null;
        }

        return $sth->fetchAll();
    }

    public function create($class) {
        $columns = '( '. implode(', ',$class->columns) . ' )';
        $values = get_object_vars($class);
      //  $sql = 'INSERT INTO '.$class->table.' '.$columns.' ('.$values.' )';
       print_r($values);
       // $this->query($sql)

    }

    public function read($resource) {

    }

    public function update($resource) {

    }

    public function delete($resource) {

    }

}