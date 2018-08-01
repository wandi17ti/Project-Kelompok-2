<!DOCTYPE html>
<html>
<title>esports-auxilium</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="W3Library.css" type="text/css">
<link rel='stylesheet' href="FontLibrary.css" type="text/css">
<link rel='stylesheet' href="picture/login.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}

</style>
<body>
<br>
<br>
<br>
<br>
<div class="w3-container w3-content w3-center w3-padding-64 w3-white" style="max-width:1000px" id="About">
<h4>You need to login first to access our shop</h4>
<div class="login-page">
  <div class="form">
  <h2>Login</h2>
    <form class="register-form w3-left">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form">
      <input type="text" placeholder="username"/>
      <input type="password" placeholder="password"/>
      <a href="http://store.esport-auxilium.dx.am"><button>login</button></a>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>
</div>
<script>
$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>
</body>
</html>