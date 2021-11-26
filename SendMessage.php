<?php

    include 'DBConnect.php';

        $credentials = DBCredential();
        extract($credentials);


        $conn = new mysqli($servername, $username, $password, $dbname);

        $SenderID = $_POST["SenderID"];
        $ReceiverID = $_POST["ReceiverID"];
        $Messages = $_POST["Messages"];
        $id_token = $_POST["id_token"];
        $fName = $_POST["fName"];


        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }else{
            $SQL="INSERT INTO messaging (SenderID, ReceiverID, Messages) VALUES ('$SenderID', '$ReceiverID', '$Messages')";
            if ($conn->query($SQL)===TRUE){
                header("Location: http://localhost/MessageChat.html?id_token=".$id_token."&friend_id=".$ReceiverID."&fName=".$fName);
                exit();
            }else{
                echo"failed to send message";
            }

        }
$conn->close();

?>