<?php
/**
 * Created by PhpStorm.
 * User: helo
 * Date: 29/07/18
 * Time: 14:57
 */

namespace MarcosPaulo\DB;

use MarcosPaulo\MyException;


class Orm
{
    private $db;

    public function setDb(Db $db)
    {
        $this->db = $db;

    }

    public function select(bool $data)
    {
        if($data){
            return [];
        }
        throw new  MyException('Data deveria ser positivo',1);
    }

}