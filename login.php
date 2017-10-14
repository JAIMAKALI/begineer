<?php
if(isset($_POST['verify']))
{
  if(empty($_POST['User']) || empty($_POST['password']) )
  {
    echo "please enter the required field";
  }
  else {
    $login_user=$_POST['User'];
    $login_password=$_POST['password'];
    require_once('connect.php');
    $sql="select * from imformation";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);
    if($row['User_name']==$login_user && $row['Password']==$login_password)
    {
      echo "you are sucessfully login";

    }
    else {
    echo "you have enter invalid password";
    }
  }
mysqli_close($con);

}
 ?>
