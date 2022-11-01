<?php
session_start();


function verpedido($tabladelpedido = [])
{
    $registropedido = "";
    foreach ($tabladelpedido as $key => $value) {
        $registropedido += $key . " " . $value . "<br>";
    }
    return $registropedido;
}


if (!isset($_REQUEST['orden']) || !isset($_REQUEST['usuario'])) {
        include_once 'registro.php';

    } else if ($_REQUEST['orden']=='Entrar' && $_SERVER['REQUEST_METHOD'] == "GET") {

    if (isset($_REQUEST['nombreUsuario'])) {
        $_SESSION['usuario'] = $_REQUEST['nombreUsuario'];
        echo "Entrando a pedidos espere...";
        include_once 'pedidos.php';
    } else echo 'Falta rellenar el usuario';
    include_once 'registro.php';
} else {

    switch ($_REQUEST('orden')) {

        case 'Anotar':
            $fruta = $_REQUEST['frutas'];
            $cantidadfrutas = $_REQUEST['cantidad'];
            if ($frutas != null && $cantidadfrutas != null) {

                $_SESSION['pedido'] = [$fruta => 0];
                $_SESSION['pedido[$fruta]+=$cantidadfrutas'];
            } else echo "Error, necesario rellenar la fruta y cantidad a pedir";

        case 'Terminar':
    }
}
