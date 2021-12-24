<?php
    require_once '../vendor/autoload.php';

    use App\Model\User;

    $obj = [
        "id" => 1,
        "name" => "hahahah",
        "email" => "rien@rien",
        "password" => "autrechoses"
    ];

    var_dump(User::delete(1));


    //var_dump(get_class_vars(User::class));



    