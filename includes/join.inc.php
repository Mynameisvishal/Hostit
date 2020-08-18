<?php

session_start();

?>
<?php
    if(isset($_POST['pubg']))
    {
        if(isset( $_SESSION['username']))
        {
        }else{
            header("Location:../login.php?msg=wantstojointournoment");
            exit();       
        }
    }


?>