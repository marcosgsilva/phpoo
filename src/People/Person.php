<?php
/**
 * Created by PhpStorm.
 * User: helo
 * Date: 28/07/18
 * Time: 22:33
 */

//A abertura da chave abaixo do nome da classe segue o padrão da PSR2

namespace MarcosPaulo\People;

class Person
{
    private $data = [];
    private $name;
    private $age;
    private $weight;

    use \MarcosPaulo\GetterSetter;


    public function __construct()
    {
        echo "Classe instanciada" . PHP_EOL;
    }

    public function setName(string $name)
    {
        /*
         * Para realizar a tipagem poderia criar um if
         *
         * Isso funciona na versão do PHP5.6
         *
         * if (!is_string($name)) {
         *   die('Não é uma string');
         *  }

         */

        //$this->data[] = $name;
        $this->name = $name;
    }

    public function setAge(int $age)
    {
        //$this->data[] = $age;
        $this->age = $age;
    }

    public function setWeight(float $weight)
    {
        //$this->data[] = $weight;
        $this->weight = $weight;
    }

    public function __call($method, $propriedade)
    {
        //  var_dump($method, $propriedade);
    }

    public function __toString(): string
    {
        return $this->name . ',' . $this->age . ',' . $this->weight;

    }




}