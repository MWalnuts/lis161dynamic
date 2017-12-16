<?php

function db_connect() {
    DEFINE('HOST', 'localhost');
    DEFINE('USER', 'root');
    DEFINE('PASS', '');
    DEFINE('DATABASE', 'lis161_crud');
    
    /*
    ** Test server connection, if fail, terminate script
    */
    $link = mysqli_connect(HOST,USER,PASS,DATABASE);
    if (!$link) {
        die("Cannot connect to the server!");
    }
    
    /*
    ** Test database connection, if fail, terminate script
    // */    
    // $db_link = mysqli_select_db($host_link,DATABASE);
    // if (!$db_link) {
    //     die("Cannot connect to the database!");
    // }
    
    /*
    ** If all connections are successful, this script
    ** returns true
    */
    return $link;
}

?>