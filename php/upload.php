
<?php


  include 'DBConnect.php';

  $credentials = DBCredential();
  extract($credentials);

  $msg = "";
  $gID = $_POST["gID"];
  $id_token = $_POST["id_token"];


  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
        $folder = "../image/".$filename;
          
        $conn = new mysqli($servername, $username, $password, $dbname);
  
        // Get all the submitted data from the form
        $sql = "INSERT INTO post_information (Picture, Profile_ID) VALUES ('$filename', '$gID')";
  
        // Execute query
        mysqli_query($conn, $sql);
          
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";

            header("Location: http://localhost/HomePage.html?id_token=".$id_token);

        }else{
            $msg = "Failed to upload image";
      }
  }
 $conn->close();
?>
</html>