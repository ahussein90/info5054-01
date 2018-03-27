<?php

// DB credentials
define("DB_HOST", "localhost");
define("DB_USER", "estoreMonday");
define("DB_PASSWORD", "estoreMonday");
define("DB_NAME", "estoreMonday");


// DB operations
function dbconnect(){
    $db_conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if ($db_conn->connect_errno) {
            die ("Could not connect to database server".$db_host."\n Error: "
                .$db_conn->connect_errno 
                ."\n Report: ".$db_conn->connect_error."\n");
        }
        return $db_conn;
}

function dbdisconnect($db_conn){
    $db_conn->close();
}

?>