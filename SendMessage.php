<?php

    include 'DBConnect.php';

        $credentials = DBCredential();
        extract($credentials);


        $conn = new mysqli($servername, $username, $password, $dbname);

        $SenderID = $_GET["SenderID"];
        $ReceiverID = $_GET["ReceiverID"];
        $Messages = $_GET["Messages"];


        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }else{
            $SQL="INSERT INTO messaging (SenderID, ReceiverID, Messages) VALUES ('$SenderID', '$ReceiverID', '$Messages')";
            if ($conn->query($SQL)===TRUE){
                echo"message sent successfully";
            }else{
                echo"failed to send message";
            }

        }
$conn->close();

?>