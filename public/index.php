<?php
    use App\Factory;
    require "../vendor/autoload.php";

   //$user =  Factory::make(\App\Model\Entity\User::class);
   $user = \App\Model\Entity\Pole::all();
   //var_dump($user);
   /*
   $user->userName = "moussa";
   var_dump(Factory::make(\App\Model\Service\UserTable::class)->edit($user));
    //echo $factory::getTable('user')->edit(($factory::getTable('user')->all()[0]));
    

    //
    */

    require_once(dirname(__DIR__). '/default/default.php');
?>