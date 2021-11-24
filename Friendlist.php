<?php 

      include 'DBConnect.php';

      $credentials = DBCredential();
      extract($credentials);

      $gID = $_POST["gID"];


      $conn = new mysqli($servername, $username, $password, $dbname);

      if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
      }else{
            //Queries User's freinds from server
            $sql = "SELECT friend.FriendID, Names.First_Name, Names.Last_Name, Names.Profile_URL FROM friends_list AS friend 
                        INNER JOIN profile_information AS Names ON friend.FriendID = Names.Profile_ID 
                              WHERE friend.ProfileID = $gID";
            
            $queryResult = $conn->query($sql);

              if ($queryResult->num_rows>0){
                while ($row = $queryResult->fetch_assoc()){

                  //Adds query results into an array
                    $friendArray[] = $row;
                } 
                //echos array in json                  
                echo json_encode($friendArray);

            }

      }

      $conn->close();

      exit();


?>