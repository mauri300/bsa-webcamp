<?php
    $conn = new mysqli('localhost', 'root', 'root', 'bsawebcamp');
    if($conn->connect_error){
        echo $error -> $conn->connect_error;
    }
?>