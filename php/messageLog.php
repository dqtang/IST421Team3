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
            $SQL_Sender = "SELECT * FROM messaging AS m WHERE m.SenderID = $SenderID AND m.ReceiverID = $ReceiverID ";
            $SQL_Reciever = "SELECT * FROM messaging AS m WHERE m.SenderID = $ReceiverID AND m.ReceiverID = $SenderID ";


            //put query results into arrays and echo in json to html
            $Message_Sender = $conn->query($SQL_Sender);
            if ($Message_Sender->num_rows>0){
                while ($row = $Message_Sender->fetch_assoc()){

                    $emparray[] = $row;

                }

            }

            $Message_Reciever = $conn->query($SQL_Reciever);
            if ($Message_Reciever->num_rows>0){
                while ($row2 = $Message_Reciever->fetch_assoc()){

                    $recarray[] = $row2;
                    
                }
           
            }
            
            //Checks if arrays are empty
            if(empty($recarray)){
                if(empty($emparray)){

                }else{
                    echo json_encode($emparray);
                }
            }elseif(empty($emparray)){
                
                if(empty($recarray)){

                }else{
                    echo json_encode($recarray);
                }
            }elseif(empty($emparray) and empty($recarray))
                {
                    
                }
            else{
                echo json_encode($recarray+$emparray);
            }
        }


    $conn->close();

?>