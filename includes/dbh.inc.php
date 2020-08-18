 <?php
    $servername= "127.0.0.1:3308";
    $dbusername = "root";
    $dbpass="";
    $dbName="hostit";

    $conn = mysqli_connect($servername,$dbusername,$dbpass,$dbName);
    if(!$conn){
        die("connection failed:".mysqli_connect_error());
    }
?>