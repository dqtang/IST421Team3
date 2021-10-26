<?php 
function InsertNewUserData(){

    include 'DBConnect.php'();

    $credentials = DBCredential();
    extract($credentials);


    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }else{
            $sql = "INSERT INTO profile_information (First Name, Last Name, Phone Number, DOB, Profile_URL) VALUES ('$FName', '$LName', '$Phone','$DOB','$Profile')";

            if ($conn->query($sql) === TRUE){
                  

            }else{
                
            }




      }
}





?>