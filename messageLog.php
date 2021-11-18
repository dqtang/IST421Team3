<?php

    include 'DBConnect.php';

<<<<<<< HEAD
        //Add to htdocs in MyPC to update Xampp folder :C

=======
>>>>>>> 421b6e39cb65a828529e7ec61ce8a801c38efc18
        $credentials = DBCredential();
        extract($credentials);


        $conn = new mysqli($servername, $username, $password, $dbname);

        //$SenderID = $_GET["SenderID"];
        //$ReceiverID = $_GET["ReceiverID"];
        //$Messages = $_GET["Messages"];

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }else{
<<<<<<< HEAD
            $SQL_Sender = "SELECT * FROM `messaging` WHERE SenderID = '1' AND ReceiverID = '2'";
            $SQL_Reciever = "SELECT * FROM `messaging` WHERE SenderID = '2' AND ReceiverID = '1'";


=======
            //SQL query for messages
            $SQL_Sender = "SELECT * FROM `messaging` WHERE SenderID = '1' AND ReceiverID = '2' INNER JOIN ";
            $SQL_Reciever = "SELECT * FROM `messaging` WHERE SenderID = '2' AND ReceiverID = '1'";


            //put query results into arrays and echo in json to html
>>>>>>> 421b6e39cb65a828529e7ec61ce8a801c38efc18
            $Message_Sender = $conn->query($SQL_Sender);
            if ($Message_Sender->num_rows>0){
                while ($row = $Message_Sender->fetch_assoc()){

                    $emparray[] = $row;
<<<<<<< HEAD

                }

                echo json_encode($emparray);

=======
                }                   
                echo json_encode($emparray);


>>>>>>> 421b6e39cb65a828529e7ec61ce8a801c38efc18
            }

            $Message_Reciever = $conn->query($SQL_Reciever);
            if ($Message_Reciever->num_rows>0){
                while ($row2 = $Message_Reciever->fetch_assoc()){

                    $recarray[] = $row2;
<<<<<<< HEAD
                    

                }
                
                echo json_encode($recarray);
=======

                }                    
                echo json_encode($recarray);

>>>>>>> 421b6e39cb65a828529e7ec61ce8a801c38efc18
            }

        }


    $conn->close();

?>