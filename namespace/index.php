<?php

namespace Html;

class Maclasse
{
    public $titre = "";
    public function message()
    {
        echo "Un titre : {$this->titre}.";
    }
}
$obj = new MaClasse();
$obj->titre = "Cours OOP";
$obj->message();