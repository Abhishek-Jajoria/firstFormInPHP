<?php

$username = "root";
$password = "";
$server = 'localhost';
$db = 'crudyoutube';

$con = mysqli_connect($server,$username,$password,$db);

if($con){
    // echo "Connection Successful";
    ?>
    <script>
        alert('Connection Succesful');
    </script>
    <?php
}else{
    // echo 'No connection';
    die('no connection' . mysqli_connect_error());

}

?>