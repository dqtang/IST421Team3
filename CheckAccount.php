<?php 
function CheckUser(){
    include 'DBConnect.php';

    $credentials = DBCredential();
    extract($credentials);


    $conn = new mysqli($servername, $username, $password, $dbname);


    $googleID = $_POST['gID'];



    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }else{
            $sql = "SELECT Profile_ID from profile_information where Profile_ID='$googleID'";

            $queryResult = $conn->query($sql);

            if ($queryResult > 0){



            }else{

            }





      }

}



?>