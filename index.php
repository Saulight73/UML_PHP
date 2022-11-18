<?php

include './Core/Class/core.php';

$myclass = new core();
$oui = $myclass->loginRequest("maurice","bob");
echo"<br><br>";
echo($oui);
