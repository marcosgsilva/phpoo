<?php
/**
 * Created by PhpStorm.
 * User: helo
 * Date: 29/07/18
 * Time: 13:51
 */

namespace MarcosPaulo\DB;



class Mysql implements Db
{
    public function connect() : string
    {
        return 'connected to mysql';
    }


}