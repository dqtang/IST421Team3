<?php 

      include 'DBConnect.php';

      $credentials = DBCredential();
      extract($credentials);

      $conn = new mysqli($servername, $username, $password, $dbname);

      if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
      }else{
            $sql = "SELECT post.Post_ID, post.Picture, post.Likes, post.Profile_ID, Names.First_Name, Names.Last_Name, Names.Profile_URL FROM post_information as post 
                        INNER JOIN profile_information as Names ON post.Profile_ID = Names.Profile_ID 
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