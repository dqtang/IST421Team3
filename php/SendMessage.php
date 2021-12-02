<?php

    include 'DBConnect.php';

        $credentials = DBCredential();
        extract($credentials);


        $conn = new mysqli($servername, $username, $password, $dbname);

        $SenderID = $_POST["SenderID"];
        $ReceiverID = $_POST["ReceiverID"];
        $Messages = $_POST["Messages"];


        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }else{
            $SQL="INSERT INTO messaging (SenderID, ReceiverID, Messages) VALUES ('$SenderID', '$ReceiverID', '$Messages')";
            if ($conn->query($SQL)===TRUE){
                echo 0;

            }else{
                echo"Failed to send message.";
            }

        }
$conn->close();

?>