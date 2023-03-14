<?php

//namespace Html;
namespace Code\Html;

class Maclasse
{
    public $titre = "";
    public function message()
    {
        echo "Un titre : {$this->titre}.";
    }
}
//$obj = new MaClasse();
$obj= new \Code\Html\MaClasse;
$obj->titre = "Cours OOP";
$obj->message();