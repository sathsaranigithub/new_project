<html>
    <head>
</head>
<body>

<?php
  $host="localhost";
  $first=$_POST["fname"];
  $last=$_POST["lname"];
  $pass=$_POST["pword"];
  $mail=$_POST["mail"];
  $mobile=$_POST["pno"];
  $dateofbirth=$_POST["birthday"];
  $gender=$_POST["fav_language"];

  $con=mysqli_connect($host,"root","","userdetails");
  $sql="INSERT INTO userdata(Firstname, lastname,password,email,mobile_number, birth_of_date,Gender) VALUES ($first,$last,$pass,$mail,$mobile,$dateofbirth,$gender)";
  if($con){
      echo "connected to the db";
  }
else {
echo "connection to db failed";

}


include("createsignup.html");



?>








</body>
    </html>