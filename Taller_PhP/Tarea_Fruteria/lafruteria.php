<?php

if ( !isset($_REQUEST['orden']) || !isset ($_SESSION['usuario'])){
    include_once 'entrada.php';

    }else{
        switch($_REQUEST('ordern')){

            case 'Entrar': 
                if(isset ($_REQUEST['nombreUsuario'])){
                    $_SESSION['usuario']=$_REQUEST['nombreUsuario'];
            }
        }
        
    }

?>









