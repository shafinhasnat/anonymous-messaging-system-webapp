<?php
    include_once 'another.php';
        
    $textform=mysqli_real_escape_string($conn,$_POST['textform']);
    $sql="insert into posts (subject, content) values('sub from php','$textform');";
    if (empty($textform)){
        header("Location: index.php");
    }
    else{
        mysqli_query($conn,$sql);
    }
header("Location: index.php");
