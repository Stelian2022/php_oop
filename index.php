<?php

class Voiture
{
    //public $couleur='rouge';
    //private $couleur='rouge';
    private $couleur;
    public $vitesse;
    public static $jante = 'metal';

    public function __construct()
    {
        //echo 'Construct. ';
    }
    public function setCouleur($couleurProp)
    {
        $this->couleur = $couleurProp;
    }
    public function getCouleur()
    {
        return $this->couleur;
    }
    public function acceler($vitesseProp): int
    {
        // echo 'La voiture accelere';
        //return 'Vroum!';
       return $this->vitesse = $vitesseProp + 10;
    }

    public static function accelerStatic()
    {
        return 'Vroum Static!';
    }
    public function __destruct()
    {
        //echo 'Couleur de la voiture: ' . $this->couleur;
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
// $sport=new Voiture();
// $sport->setCouleur('Jaune');
// echo $sport->getCouleur();

// $sport = new Voiture();
// echo $sport->acceler(30);

class Fruit
{
    private $nomFruit;
    public function __get($nom){
       // return "L'attribut (propriete) $nom est innacessible";
        return $this->nomFruit;
    }
    public function __set($nom,$val){
        $this ->$nom=$val;
    }
}
$pomme=new Fruit();
$pomme->nomFruit='eat eat eat' . ' Pomme Golden';
echo $pomme->nomFruit;