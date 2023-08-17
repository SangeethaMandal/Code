<?php
  $FullName=$_POST['FullName'];
  $Username=$_POST['Username'];
  $Email=$_POST['Email'];
  $PhoneNumber=$_POST['PhoneNumber'];
  $Password=$_POST['Password'];
  $ConfirmPassword=$_POST['ConfirmPassword'];
  $gender=$_POST['gender'];

  $conn=new mysqli('localhost','root','','registration');
  if($conn->connect_error){
    die('Connection Failed: '.$conn->connect_error);
  }
  else{
    $stmt=$conn->prepare("insert into register(FullName,Username,Email,PhoneNumber,Password,ConfirmPassword,gender)values(?,?,?,?,?,?,?)");
    $stmt->bind_param("sssisss",$FullName,$Username,$Email,$PhoneNumber,$Password,$ConfirmPassword,$gender);
    $stmt->execute();
    echo"registred Successfully...";
    $stmt->close();
    $conn->close();
  }
?>