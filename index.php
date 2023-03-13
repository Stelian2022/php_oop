<?php

class Voiture
{
    //public $couleur='rouge';
    //private $couleur='rouge';
    private $couleur;
    public static $jante='metal';

    public function __construct()
    {
        //echo 'Construct. ';
    }
   public function setCouleur($couleurProp){
    $this->couleur=$couleurProp;
   }
   public function getCouleur(){
    return $this->couleur;
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
    public function __destruct(){
        echo 'Couleur de la voiture: ' . $this->couleur;
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
//echo Voiture::accelerStatic();
$sport=new Voiture();
$sport->setCouleur('Jaune');
echo $sport->getCouleur();

