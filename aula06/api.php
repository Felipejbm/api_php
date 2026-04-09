<?php

    // header("content-type: application/json"); 

    // $usuarios = [
    //     ["id" => 1, "nome" => "Fefe ", "email"=> "fefe@email.com"],
    //     ["id" => 2, "nome" => "Dandan", "email"=> "dandan@email.com"]
    // ];
    
    // echo json_encode($usuarios);
    
    header("content-type: application/json"); 

    $metodo = $_SERVER['REQUEST_METHOD'];

    // echo "metodo de requisição " .$metodo;
 
    switch ($metodo) {
        case 'GET':
            echo "here GET method actions";
            break;
        case 'POST';
            echo "here POST method actions"; 
            break;
        default:
            echo 'method not found!';
            break;
    }
?>