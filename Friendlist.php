<?php 

      include 'DBConnect.php';

      $credentials = DBCredential();
      extract($credentials);

      $gID = $_POST["gID"];


      $conn = new mysqli($servername, $username, $password, $dbname);

      if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
      }else{
            $sql = "SELECT friend.FriendID, Names.First_Name, Names.Last_Name, Names.Profile_URL FROM friends_list AS friend INNER JOIN profile_information AS Names ON friend.FriendID = Names.Profile_ID WHERE friend.ProfileID = $gID";
            
            $queryResult = $conn->query($sql);
            if ($conn->query($sql) === TRUE){

              if ($queryResult->num_rows>0){
                while ($row = $$queryResult->fetch_assoc()){

                    $friendArray[] = $row;
                }                   
                echo json_encode($friendArray);

            }

                }else{
                  echo "Failed Query";
                  exit();
                }
      }


      $conn->close();




?>