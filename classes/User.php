<?php
// class User{
// private $userName;
// public function __construct($name){
//     $this->userName=$name;
//  }
//  public function getName()
//  {
//      return $this->userName;
//  }
//  }

 class User
{

     //private $name="Jane Doe";
     protected $name = "Jane Doe";
     public function method1()
     {
         $userName = $this->name;
         $userName = "Je suuuis l'utilisateur : $userName";
         return $userName;
     }
 }

