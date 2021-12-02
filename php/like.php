<?php 

      include 'DBConnect.php';

      $credentials = DBCredential();
      extract($credentials);

      $conn = new mysqli($servername, $username, $password, $dbname);


    $postID = $_GET['postID'];

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
  }else{
        $sql = "UPDATE post_information
        SET Likes = Likes + 1
        WHERE Post_ID = $postID";

        if ($conn->query($sql) === TRUE){
   
              exit();

        }else{
              echo"Error: " .$sql ."<br>" . $conn->error;
        }

  }

      $conn->close();

?>