<!DOCTYPE html>
<html>
  
<title>Image Upload</title>
<link rel="stylesheet" type= "text/css" href ="postpage.css"/>
<header>

<div class= "Con1"><a  href="Home Page/Homepage.html" >Flex Media</a>
<a >New Post</a>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
</div>
	</header>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <body>
<div id="content"  class="Con2" >
<img src="Home page/plus.PNG" width="416" height="416" alt="" class = "center"/>
  <form method="POST" action="" enctype="multipart/form-data">
      <input type="file" name="uploadfile" value=""/>
        
      <div>
          <button  class="center" type="submit" name="upload">UPLOAD</button>
        </div>
        <div class="con3"> </div>
  </form>
</div>
</body>
<script>
		const params = new URLSearchParams(document.location.search);
		const id_token = params.get('id_token');

		function decodeJwtResponse(id_token){
							var base64Url = id_token.split('.')[1];
							var base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
							var jsonPayload = decodeURIComponent(atob(base64).split('').map(function(c) {
								return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
							}).join(''));

							return JSON.parse(jsonPayload);
						};
		const responsePayload = decodeJwtResponse(id_token);
		gID = responsePayload.sub;


    $.ajax({
						type: 'POST', 
						url: 'http://localhost/upload.php',
						data: {'gID' : gID},
						success: function(data){
              alert(data);
						}
					})
</script>

<?php
error_reporting(0);
?>
<?php


  include 'DBConnect.php';

  $credentials = DBCredential();
  extract($credentials);

  $msg = "";
  $gID = $_POST["gID"];


  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
        $folder = "image/".$filename;
          
        $conn = new mysqli($servername, $username, $password, $dbname);
  
        // Get all the submitted data from the form
        $sql = "INSERT INTO post_information (Picture, Profile_ID) VALUES ('$filename', '$gID')";
  
        // Execute query
        mysqli_query($conn, $sql);
          
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
  }
 $conn->close();
?>
</html>