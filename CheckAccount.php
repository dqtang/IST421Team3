<?php 

    include 'DBConnect.php';

    $credentials = DBCredential();
    extract($credentials);


    $conn = new mysqli($servername, $username, $password, $dbname);


    $gID = $_POST["gID"];



    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }else{
            $sql = "SELECT Profile_ID from profile_information where Profile_ID='$gID'";

            $queryResult = $conn->query($sql);

            if ($queryResult->num_rows > 0){
                  while($row = $queryResult->fetch_assoc()){
                        $profileID=$row["Profile_ID"];
                        echo"ID: ". $row["Profile_ID"];

                  }
                  }else{
                        echo "0 Results";
            }


      }




?>