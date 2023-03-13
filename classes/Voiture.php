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