<?php

$conf = parse_ini_file("config.ini");

$dsn = $conf["driver"] .
    ":host=" . $conf["server"] .
    ";dbname=" . $conf["database"] .
    ";port=" . $conf["port"];
    
    $conn = new PDO($dsn, $conf["user"], $conf["password"]);


?>
