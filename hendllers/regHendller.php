<?php
    require_once("../connection.php");

    if(isset($_POST['submit'])){

        $Fname = $_POST['Firstname'];
        $Lname = $_POST['Lastname'];
        $addr = $_POST['Address'];
        $city = $_POST['City'];
        $mail = $_POST['Email'];
        $pass = sha1($_POST['Password']);
        

        $stmt = $conn->prepare("INSERT INTO registration(`Firstname`, `Lastname`, `Address`, `City`, `Email`, `Password`) 
        VALUES (:Fname,:Lname,:addre,:city,:mail,:pass)");

        $stmt ->execute(array(":Fname"=> $Fname,":Lname"=>$Lname,":addre"=>$addr,":city"=>$city,":mail"=>$mail,":pass"=>$pass));

        header("Location: ../ordes.php");
    }  

    
?>