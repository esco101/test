<?php

$con=new mysqli('localhost','root','','test');

if($con){
    echo" successful";
}else{
    die(mysqli_error($con));
}

?>
