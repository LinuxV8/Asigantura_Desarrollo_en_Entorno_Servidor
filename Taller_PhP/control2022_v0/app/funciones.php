<?php
require_once ('dat/datos.php');
/**
 *  Devuelve true si el código del usuario y contraseña se 
 *  encuentra en la tabla de usuarios
 *  @param $login : Código de usuario
 *  @param $clave : Clave del usuario
 *  @return true o false
 **/
function userOk($login,$clave):bool {
    global $usuarios;

    if (array_key_exists($login, $usuarios)!=false) {
        if ($usuarios[$login][1]==$clave) {
            return true;
        }
    }

    return false;
}

/**
 *  Devuelve el rol asociado al usuario
 *  @param $login: código de usuario
 *  @return ROL_ALUMNO o ROL_PROFESOR
 **/
function getUserRol($login){
    global $usuarios;
    return $usuarios[$login][2];
}

/**
 *  Muestra las notas del alumno indicado.
 *  @param $codigo: Código del usuario
 *  @return $devuelve una cadena con una tabla html con los resultados 
 */
function verNotasAlumno($codigo):String{
    $msg="";
    global $nombreModulos;
    global $notas;
    global $usuarios;

    $msg .= " Bienvenido/a alumno/a: ". $usuarios[$codigo][0]."<br>";
    $msg .= "<hr>";
    $msg .= "<table>";
    $msg .= "<tr><td>MÓDULOS</td><td>Nota</td><tr>";     
    for ($i=0; $i <sizeof($nombreModulos) ; $i++) { 
        $msg .= "<tr><td>".$nombreModulos[$i]."</td><td>".$notas[$codigo][$i]."</td><tr>";                             ;
    }
    $msg .= "</table>";
    return $msg;
}

/**
 *  Muestra las notas de todos alumnos. 
 *  @param $codigo: Código del profesor
 *  @return $devuelve una cadena con una tabla html con los resultados 
 */
function verNotaTodas ($codigo): String {
    $msg="";

    global $nombreModulos;
    global $notas;
    global $usuarios;
    $claves_alumn=array_keys($notas);

    $msg .= " Bienvenido Profesor: ". $usuarios[$codigo][0]."<br>" ;
    $msg .= "<hr>";
    $msg .= "<table>";
    $msg .= "<tr><td>NOMBRE</td>";
    foreach ($nombreModulos as $key) {
        $msg .= "<td>".$key."</td>";
    }
    $msg .= "</tr>";

    for ($i=0; $i < sizeof($usuarios)-1 ; $i++) { 
        $msg .= "<tr><td>".$usuarios[$claves_alumn[$i]][0]."</td>";
        for ($j=0; $j < sizeof($nombreModulos); $j++) { 
            $msg .= "<td>".$notas[$claves_alumn[$i]][$j]."</td>";
        }
        $msg .= "</tr>";
    }
    $msg .= "</table>";
    return $msg;
}