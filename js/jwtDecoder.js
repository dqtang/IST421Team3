<script>
<script src="https://accounts.google.com/gsi/client" async defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

function handleCredentialResponse(response) {
				  console.log("Encoded JWT ID token: " + response.credential);
				}
				window.onload = function () {
				  google.accounts.id.initialize({
					client_id: "6324381213-tn0ffjmb6r1s6ufa514ue4ql7tdr3o0k.apps.googleusercontent.com",
					callback: handleCredentialResponse
				  });
				  google.accounts.id.renderButton(
					document.getElementById("buttonDiv"),
					  // customization attributes
					{ theme: "outline", size: "large", logo_alignment: "center" }  
				  );
					//One Tap Prompt
				  google.accounts.id.prompt(); 
				}
</script>
