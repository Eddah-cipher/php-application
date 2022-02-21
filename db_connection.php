<?php

$db_connection = mysqli_connect("localhost","root","","Login_registration");
//check connection
if (mysqli_connect_errno()){
    echo "Failed to connect to mysql:".mysqli_connect_error();

}
?>


