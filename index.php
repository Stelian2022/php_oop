<?php

class Voiture
{
    public $couleur='rouge';
    //private $couleur='rouge';
    const ROUE=4;
    public static $jante='metal';

    public function __construct()
    {
        echo 'Construct';
    }

    public function acceler()
    {
       // echo 'La voiture accelere';
        return 'Vroum!';
    }
    public static function accelerStatic()
    {
        return 'Vroum Static!';
    }
};
// il faut créer une fonction pour pouvoir acceder au varbiable 'private' 
//$citadine=new Voiture();
//var_dump($citadine);

//echo $citadine->couleur;
//$citadine->acceler(); --uriliset avec echo dans la fonction
//echo $citadine->acceler(); --utiliser avec return dans la fonction

//echo 'Ma voiture a ' . Voiture::ROUE . ' roues.';
//echo Voiture::$jante;
echo Voiture::accelerStatic();
