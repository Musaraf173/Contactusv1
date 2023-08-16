<?php 
$conn = mysqli_connect('localhost','root','','contacts','3306');
if(mysqli_connect_errno()){
    echo 'Failed to connect to MySQL'.mysqli_connect_errno();
} else{
    // echo 'DB connected';
}
?>