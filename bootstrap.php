<?php

require __DIR__ . '/autoload.php';

//$name = (new Person)->setName(1);
/*$person = new MarcosPaulo\People\Person();
$person->setName('Marcos');
$person->setAge('28');
$person->setWeight(85);

var_dump($person);
*/


//var_dump((new MarcosPaulo\DB\Mysql)->connect());
//var_dump((new MarcosPaulo\DB\Postgres)->connect());


/*try {
    (new MarcosPaulo\DB\Orm)->select(false);
} catch (MarcosPaulo\MyException $e) {
    echo $e->getMessage();
} catch (\Exception $e) {
    echo "ERRO: ".$e->getMessage();
}
*/

/*
$people = new MarcosPaulo\People\Person;
$people->setLastName('123');
$people->setMarcao('456');
*/


$person = new MarcosPaulo\People\Person();
$person->name='marcos';
$person->age=28;
$person->weight=83;


echo $person;

