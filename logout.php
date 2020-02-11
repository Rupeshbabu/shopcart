<?php

$prev = @$_GET['prevPage'];

session_start();
if(session_destroy()) {
    if(!isset($_GET['prevPage'])){
    header("Location:index.php");

    }else {
        header("Location: login.php?prevpage=".$prev);

    }
 }


?>