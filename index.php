<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}
.title {
  color: grey;
  font-size: 18px;
}
button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}
a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}
button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>
<h3 style="text-align:center">Congratulations you have successfully deployed your PHP project. </h3>
<h3 style="text-align:center"> <?php
$localIP = getHostByName(getHostName());
echo "You are connected with " .$localIP;
?></h3>

<h2 style="text-align:center">Get connect with me</h2>

<div class="card">
  <img src="https://media-exp1.licdn.com/dms/image/C4E03AQG9fcKbkqESuQ/profile-displayphoto-shrink_200_200/0/1641650801312?e=1658361600&v=beta&t=AOrlPXU43gtL0Aqr0Wa6KaRpGSJTLVwxAyLfmFfifCY" alt="" style="width:100%">
  <h1>Aftab Ali</h1>
  <p> Cloud and DevOps consultant </p>
  <p> Deployed uisng Azure v1 </p>
  <div style="margin: 24px 0;"> 
    <a href="https://www.facebook.com/aftab.shaikh.589"><i class="fa fa-facebook"></i></a>  
    <a href="https://www.linkedin.com/in/aftab-shaikh-035440118/"><i class="fa fa-linkedin"></i></a>  
    <a href="https://twitter.com/aftab70_ali"><i class="fa fa-twitter"></i></a> 
  </div>
  <p><button>Email Id - aftab70@ymail.com</button></p>
</div>

</body>
</html>
