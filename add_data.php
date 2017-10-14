<?php
if(isset($_POST['register']))
{
  $missing = array();
if(empty($_POST['name']))
{
  $missing[]='userName';
}
else {
  $user1=$_POST['name'];
}
if(empty($_POST['email']))
{
  $missing[]='email';
}
else {
  $email1=$_POST['email'];
}
if(empty($_POST['city']))
{
  $missing[]='city';
}
else {
  $city=$_POST['city'];
}
if(empty($_POST['state']))
{
  $missing[]='state';
}
else {
  $state=$_POST['state'];
}
if(empty($_POST['mobileNo']))
{
  $missing[]='MobileNO';
}
else {
  $mobileNo=$_POST['mobileNo'];
}
if(empty($_POST['password']))
{
  $missing[]='password';
}
else {
  $password=$_POST['password'];
}
if(empty($missing))
{
  require_once('connect.php');
  $query="INSERT INTo `imformation`(`User_name`, `Email`, `City`, `State`, `Mobile_no`, `Password`) VALUES ('$user1','$email1','$city','$state','$mobileNo','$password')";
  $result=mysqli_query($con,$query);
  if($result)
  {
    echo "form submitted";
  }
  else {
    echo "error";
  }
mysqli_close($con);
}
else {
  foreach ($missing as $x) {
    echo "data missed $x<br/>";
  }
}
}

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>login</title>
  </head>

  <body>
  <form  action="login.php" method="post">
    <p>User: <input type="text" name="User"/></p>
    <p>pasword:<input type="password" name="password"/></p>
    <p><input type="submit" name="verify"></p>
  </form>
  </body>
</html>
