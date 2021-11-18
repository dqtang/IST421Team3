<?php

    include 'DBConnect.php';

        //Add to htdocs in MyPC to update Xampp folder :C

        $credentials = DBCredential();
        extract($credentials);


        $conn = new mysqli($servername, $username, $password, $dbname);

        //$SenderID = $_GET["SenderID"];
        //$ReceiverID = $_GET["ReceiverID"];
        //$Messages = $_GET["Messages"];

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }else{
            $SQL_Sender = "SELECT * FROM `messaging` WHERE SenderID = '1' AND ReceiverID = '2'";
            $SQL_Reciever = "SELECT * FROM `messaging` WHERE SenderID = '2' AND ReceiverID = '1'";


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