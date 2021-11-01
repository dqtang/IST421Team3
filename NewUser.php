<?php 

    include 'DBConnect.php'();

    $credentials = DBCredential();
    extract($credentials);


    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $DoB = $_POST["DoB"];
    $phoneNumber = $_POST["phoneNumber"];


    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }else{
            $sql = "INSERT INTO profile_information (First_Name, Last_Name, Phone_Number, DOB, Email) VALUES ('$firstName', '$lastName', '$phoneNumber','$DoB','$email')";

            if ($conn->query($sql) === TRUE){
                  echo "New record created successfully";


            }else{
                  echo"Error: " .$sql ."<br>" . $conn->error;

                
            }




      }



      $conn->close();




?>