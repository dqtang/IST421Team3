<?php 
include 'DBConnect.php';

      $credentials = DBCredential();
      extract($credentials);

$gID = $_POST["gID"];
      $conn = new mysqli($servername, $username, $password, $dbname);
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
  }else{
      $SqlCode = "SELECT Profile_URL from profile_information where Profile_ID ='$gID'";
      $query = $conn->query($SqlCode);
      if($query->num_rows>0){
        while($row = $queryResult->fetch_assoc()){
             $ProfileURl = $row["Profile_URL"];
             echo $ProfileURl;
          }

      }
  }
?>