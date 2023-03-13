<?php
// require_once './classes/Voiture.php';

// require_once './classes/Fruit.php';
// require_once './classes/User.php';
// function my_autoloader($class)
// {
//     include 'classes/' .  $class . '.php';
// }
spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.php';
});
// il faut créer une fonction pour pouvoir acceder au varbiable 'private' 
//  $citadine=new Voiture();
//  var_dump($citadine);

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


// $pomme=new Fruit();
// $pomme->nomFruit='eat eat eat' . ' Pomme Golden';
// echo $pomme->nomFruit;

// class Maclasse
// {
//     private $str;

//     public function __construct($param)
//     {
//         $this->str = $param;
//     }
//     public function __toString()
//     {
//         return $this->str;
//     }
// }
// $objet =new Maclasse('Bonjour');
// echo $objet;


// $bill=new User('oi oi');
// echo $bill->getName();

//l'heritage

//   $user1 = new Admin();
//   var_dump($user1->method2());
// abstract class A
// {
//     public function methode()
//     {
//         echo "Bonjour Abstrac";
//     }
// }
// class B extends A
// {
// }

// $objet = new B();
// $objet->methode();
