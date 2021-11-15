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
		firstName = responsePayload.given_name;
		lastName = responsePayload.family_name;
		profileImageUrl = responsePayload.picture;
		email = responsePayload.email;
		gID = responsePayload.sub;


	</script>
</html>

<?php
error_reporting(0);
?>
<?php


  include 'DBConnect.php';

  $credentials = DBCredential();
  extract($credentials);

  $msg = "";
  
  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
        $folder = "image/".$filename;
          
        $conn = new mysqli($servername, $username, $password, $dbname);
  
        // Get all the submitted data from the form
        $sql = "INSERT INTO post_information (Picture) VALUES ('$filename')";
  
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
