<?php 

      include 'DBConnect.php';

      $credentials = DBCredential();
      extract($credentials);

      $conn = new mysqli($servername, $username, $password, $dbname);

      $userID = $_POST['userID'];

      $LikeCounter = 0;

      if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
      }else{
            $sql = "SELECT Likes FROM post_information WHERE Profile_ID = $userID";

            $queryResult = $conn->query($sql);

            if ($queryResult->num_rows>0){
                while ($row = $queryResult->fetch_assoc()){

                    $LikeCounter = $LikeCounter + $row['Likes'];

                }

            }

      } 
      
      echo $LikeCounter;



      $conn->close();

