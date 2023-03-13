<?php
class Admin extends User
{
    public function method2()
    {
        $userName=User::method1();
        //$userName = $this->name;
        $userName = "Je suuuis l'utilisateur {$userName} dans la classe Admin";
        return $userName;
    }
}