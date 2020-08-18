<?php 

if(isset($_POST['feedback'])){

    require 'dbh.inc.php';
    $mail = $_POST['email'];
    $comment = $_POST['comment'];

    if(empty($mail) || empty($comment)){
        header("Location:../index.php?error=emptyfields");
        exit();

    }
    elseif(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
        header("Location:../index.php?error=invalidmail");
        exit();
    }
    else{
        $sql= "INSERT INTO feedback (email, feedback) VALUES(?,?)";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)) {
            header("Location:../contactus.php?error=sqlerror");
            exit();
        }else{
            mysqli_stmt_bind_param($stmt,"ss",$mail,$comment);
            mysqli_stmt_execute($stmt);
            header("Location:../index.php?feedback=success");
            exit();
        }
    }
}else{
    header("Location:../index.php#feedback");
    exit();
}