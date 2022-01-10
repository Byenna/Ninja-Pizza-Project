<?php

//connect to database
$conn = mysqli_connect('localhost', 'shaun', 'test1234', 'ninja_pizza');

//check connection to database
if(!$conn) {
echo 'connection error:' . mysqli_connect_error();
}

?>