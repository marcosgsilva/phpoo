<?php
/**
 * Created by PhpStorm.
 * User: helo
 * Date: 29/07/18
 * Time: 14:12
 */

namespace MarcosPaulo\DB;


class Postgres implements Db
{

    public function connect(): string
    {
        return 'Connected to Postgres';
    }
}