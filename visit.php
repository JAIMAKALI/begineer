<?php
require_once('connect.php');
$sql1="select * from imformation";
$result2=mysqli_query($con,$sql1);
if($result2)
{
  echo "<table><tr> <td>Name</td><td>Email</td><td>city</td><td>state</td> <td>mobile no</td><td>password</td></tr>";
while($row=mysqli_fetch_array($result2))
{
  echo "<tr> <td>".$row['User_name']."</td><td>".$row['Email']."</td><td>".$row['City']."</td><td>".$row['State']."</td> <td>".$row['Mobile_no']."</td><td>".$row['Password']."</td></tr>";;

}
echo "</table>";
}
else {
  echo "erroe";
}

 ?>
