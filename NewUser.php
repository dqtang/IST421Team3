<?php 

      include 'DBConnect.php';

      $credentials = DBCredential();
      extract($credentials);


      $firstName = $_POST["firstName"];
      $lastName = $_POST["lastName"];
      $email = $_POST["email"];
      $DoB = $_POST["DoB"];
      $phoneNumber = $_POST["phoneNumber"];
      $gID = $_POST["gID"];
      $profileImageUrl = $_POST["profileImageUrl"];
      $id_token = $_POST["id_token"];

      $conn = new mysqli($servername, $username, $password, $dbname);

      if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
      }else{
            $sql = "INSERT INTO profile_information (First_Name, Last_Name, Phone_Number, DOB, Email, Profile_ID, Profile_URL) VALUES ('$firstName', '$lastName', '$phoneNumber','$DoB','$email', '$gID', '$profileImageUrl')";

            if ($conn->query($sql) === TRUE){
                  header("Location: http://localhost/IST 421/Homepage.html?id_token=".$id_token);
                  exit();

            }else{
                  echo"Error: " .$sql ."<br>" . $conn->error;

                
            }




      }



      $conn->close();




?>