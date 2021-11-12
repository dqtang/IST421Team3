<?php 

require_once 'vendor/autoload.php';

// Get $id_token via HTTPS POST.


$id_token = $_POST['id_token'];
$CLIENT_ID = "6324381213-tn0ffjmb6r1s6ufa514ue4ql7tdr3o0k.apps.googleusercontent.com";

$client = new Google_Client(['client_id' => $CLIENT_ID]);  // Specify the CLIENT_ID of the app that accesses the backend
$payload = $client->verifyIdToken($id_token);
if ($payload) {
  $userid = $payload['sub'];
  $profileImageUrl = $payload['picture'];


  include 'DBConnect.php';

  $credentials = DBCredential();
  extract($credentials);


  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }else{
      //SQL Query Code
      $sql = "SELECT Profile_ID from profile_information where Profile_ID='$userid'";
      //Query Results
      $queryResult = $conn->query($sql);

      if ($queryResult->num_rows > 0){
            while($row = $queryResult->fetch_assoc()){
                  $profileID=$row["Profile_ID"];

                  //Updates Profile Image saved in database to match with Google
                  $sqlUpdate ="UPDATE profile_information SET Profile_URL = '$profileImageUrl' where Profile_ID='$userid'";
                  if($conn->query($sqlUpdate)===TRUE){
                        //Redirect to User's Home
                        echo "http://localhost/Home Page/Homepage.html";

                  }else{
                        echo "Connection Failure.";
                  }
            }
      }else{
                  echo "http://localhost/newUser.html";


            }
  }


  $conn->close();


} else {
  // Invalid ID token
  echo 'invalid id';
}


?>