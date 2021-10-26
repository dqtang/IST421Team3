<?php 

      include 'DBConnect.php';

      $credentials = DBCredential();
      extract($credentials);


      $conn = new mysqli($servername, $username, $password, $dbname);


      $gID = $_POST["gID"];
      $firstName = $_POST["firstName"];
      $lastName = $_POST["lastName"];
      $profileImageUrl = $_POST["profileImageUrl"];
      $email = $_POST["email"];


      if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
      }else{
            $sql = "SELECT Profile_ID from profile_information where Profile_ID='$gID'";

            $queryResult = $conn->query($sql);

            if ($queryResult->num_rows > 0){
                  while($row = $queryResult->fetch_assoc()){
                        $profileID=$row["Profile_ID"];
                        echo"ID: ". $row["Profile_ID"];
                        echo "\n1 Result Found";

                        //Updates Profile Image saved in database to match with Google
                        $sqlUpdate ="UPDATE profile_information SET Profile_URL = '$profileImageUrl' where Profile_ID='$gID'";
                        if($conn->query($sqlUpdate)===TRUE){
                              //Redirect to User's Home

                        }else{
                              echo "Connection Failure.";
                        }
                  }
            }else{
                        echo "0 Results";
                        //Redirect to New User Page



            }


      }

      $conn->close();



?>