<?php 

if(isset($_POST['logout-button'])){

    require 'dbh.inc.php';

    $mailuid = $_POST['mailuid'];
    $password= $_POST['pwd'];

    if(empty($mailuid) || empty($password)){
        header("Location:../login.php?error=emptyfields");
        exit();

    }else{
        $sql = "SELECT * FROM users WHERE username=? OR email=?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location:../login.php?error=sqlerror");
            exit();
        }else{
            mysqli_stmt_bind_param($stmt,"ss",$mailuid,$mailuid);
            mysqli_stmt_execute($stmt);
            $results = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($results)){
                $pwdCheck = password_verify($password,$row['password']);
                if($pwdCheck == false){
                    header("Location:../login.php?error=wrongpassword");
                    exit();
                }
                elseif($pwdCheck == true){
                    session_start();
                    $_SESSION['Id'] = $row['id'];
                    $_SESSION['username'] = $row['username'];

                    header("Location:../index.php?login=success");
                    exit();


                }else{
                    header("Location:../login.php?error=wrongpassword");
                    exit();
                }
            }else{
                header("Location:../login.php?error=nouser");
            exit();
            }
        }
    }
}else{
    header("Location:../signup.php");
    exit();
}