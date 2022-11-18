<?php

include './Core/Class/core.php';
$type = $_POST["type"];
if($type =="login"){
    $login = $_POST["login"];
    $password = $_POST["password"];
    $myclass = new core();
    $oui = $myclass->loginRequest($_POST['login'],$_POST['password']);
    echo"<br><br>";
    echo($oui);
    
}

