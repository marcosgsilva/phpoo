<?php
/**
 * Created by PhpStorm.
 * User: helo
 * Date: 29/07/18
 * Time: 17:41
 */

namespace MarcosPaulo;


trait GetterSetter
{
    public function __set($name, $value)
    {
        $method = 'set' . ucfirst($name);
        if (method_exists($this, $method)) {
            $this->$method($value);
        } else {
            $this->$name = $value;
        }
    }

    public function __get($propertie)
    {
        $method = 'get' . ucfirst($propertie);

        if (method_exists($this, $method)) {
            return $this->$method();
        } else {
            return $this->$propertie;
        }

    }

}