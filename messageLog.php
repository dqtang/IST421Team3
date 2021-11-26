<?php

    include 'DBConnect.php';

        $credentials = DBCredential();
        extract($credentials);


        $conn = new mysqli($servername, $username, $password, $dbname);

        $SenderID = $_POST["SenderID"];
        $ReceiverID = $_POST["ReceiverID"];

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }else{


            //SQL query for messages
            $SQL_Sender = "SELECT * FROM `messaging` WHERE SenderID = $SenderID AND ReceiverID = $ReceiverID";
            $SQL_Reciever = "SELECT * FROM `messaging` WHERE SenderID = $ReceiverID AND ReceiverID = $SenderID";


            //put query results into arrays and echo in json to html
            $Message_Sender = $conn->query($SQL_Sender);
            if ($Message_Sender->num_rows>0){
                while ($row = $Message_Sender->fetch_assoc()){

                    $emparray[] = $row;

                }                   
                echo json_encode($emparray);


            }

            $Message_Reciever = $conn->query($SQL_Reciever);
            if ($Message_Reciever->num_rows>0){
                while ($row2 = $Message_Reciever->fetch_assoc()){

                    $recarray[] = $row2;
                    

                }
                
                echo json_encode($recarray);
            }

        }


    $conn->close();

?>