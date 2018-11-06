<?php 
session_start();
if(isset($_SESSION['admin'])){
   header("location: /app/");
}
?>

 

<!DOCTYPE html>
<head>
<title>Login | Bru</title>
 <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<meta name="google-signin-client_id" content="128444185702-4eucf6c9nbb2fd7miduu06q0rrqsvh0v.apps.googleusercontent.com">
<style>
#container{
  width:100%;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  box-align: center;
}
</style>
 <style type="text/css">
@font-face {
    font-family: 'kohinoor';
    src: url('/fonts/kohinoor-book-webfont.eot');
    src: url('/fonts/kohinoor-book-webfont.eot?#iefix') format('embedded-opentype'),
    url('/fonts/kohinoor-book-webfont.woff') format('woff'),
    url('/fonts/kohinoor-book-webfont.svg#kohinoor_bookregular') format('svg');
    font-weight: normal;
    font-style: normal;
} 
 *{
  font-family: Kohinoor;
 } 
  </style>
</head>
<body style="width:100%">



<br>
<br>
<center>
<fieldset style="    width: 250px;
    border: 1px solid #ccc;
    margin: auto;
    height: auto;
    padding:20px;
    font-family: 'Kohinoor';
    font-size: 14px;"><legend> Log In to Bru </legend>
    Sign in with your<br>IIIT-Delhi Account<br><br>
<div class="g-signin2" data-onsuccess="onSignIn"></div>

</fieldset>
</center>




</div>
<script type="text/javascript">
  function onSignIn(googleUser) {
  var id_token = googleUser.getAuthResponse().id_token;
  var profile = googleUser.getBasicProfile();
  var email = profile.getEmail();
  console.log('ID: ' + profile.getId()); 
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + email);
  var domain = email.replace(/.*@/, "");
  if(domain!="iiitd.ac.in"){
    signOut();
    alert("Sign in with your IIIT Delhi Account");
  }
  else{
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'token_sign_in.php');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
      if(xhr.responseText == "1"){
        console.log('Signed in as: ' + xhr.responseText);
        //location.reload();
      }
      else{
        alert("You are not allowed to signin");
      }
    };
    xhr.send('tokenid=' + id_token);
  }
}
</script>


<script>
  function signOut() {
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'logout.php');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
      console.log('Logged out');
    };
    xhr.send('logout');
    // Google Logout
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }
</script>



</body>






