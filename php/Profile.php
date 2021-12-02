<?php 

      include 'DBConnect.php';

      $credentials = DBCredential();
      extract($credentials);


      $profileID = $_POST["profileID"];
      $conn = new mysqli($servername, $username, $password, $dbname);

      if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
      }else{
            $sql = "SELECT post.Picture, post.Profile_ID, post.Likes, post.TimeStamp, Names.First_Name, Names.Last_Name, Names.Profile_URL FROM post_information as post 
                        INNER JOIN profile_information as Names ON $profileID = Names.Profile_ID 
                              Order BY TimeStamp DESC";

            $queryResult = $conn->query($sql);

            if ($queryResult->num_rows>0){
              while ($row = $queryResult->fetch_assoc()){

                //Adds query results into an array
                  $recentPosts[] = $row;
              } 
              //echos array in json                  
              echo json_encode($recentPosts);

          }

      }



      $conn->close();




?>