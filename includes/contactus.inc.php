<?php 

if(isset($_POST['contactus'])){

    require 'dbh.inc.php';
    $name = $_POST['name'];
    $mail = $_POST['email'];
    $comment = $_POST['comment'];

    if(empty($mail) || empty($name) || empty($comment)){
        header("Location:../contactus.php?error=emptyfields");
        exit();

    }else if(!filter_var($mail, FILTER_VALIDATE_EMAIL)&& !preg_match("/^[a-zA-Z0-9]*$/",$name) ){
        header("Location:../contactus.php?error=invalidmailuid");
        exit();

    }
    elseif(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
        header("Location:../contactus.php?error=invalidmail&uid=".$username);
        exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9]*$/",$name)){
        header("Location:../contactus.php?error=invaliduid&mail=".$email);
        exit();
    }else{
        $sql= "INSERT INTO comments (name,email, comments) VALUES(?,?,?)";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)) {
            header("Location:../contactus.php?error=sqlerror");
            exit();
        }else{
            mysqli_stmt_bind_param($stmt,"sss",$name,$mail,$comment);
            mysqli_stmt_execute($stmt);
            header("Location:../contactus.php?signup=success");
            exit();
        }
    }
}else{
    header("Location:../contactus.php");
    exit();
}