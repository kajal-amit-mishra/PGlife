<?php
$conn = mysqli_connect("127.0.0.1","root","","pglife");

if( mysqli_connect_errno()){
    // throw an error based on ajax or not
    echo "Failed to connect MYSQL!" . mysqli_connect_error();;
    return;
}
