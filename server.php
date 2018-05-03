<?php
session_start();
$username=0;
$Email=0;
$Phone_no=0;
$University=0;
$password=0;

$connect = mysqli_connect('localhost', 'root', '', 'innerve');

if (isset($_POST['register_user'])) {

  $username = mysqli_real_escape_string($connect, $_POST['Name']);
  $Email = mysqli_real_escape_string($connect, $_POST['Email']);
  $Phone_no = mysqli_real_escape_string($connect, $_POST['Phone_no']);
  $University = mysqli_real_escape_string($connect,$_POST['University']);
  $password = mysqli_real_escape_string($connect, $_POST['password']);
  
  	$password_user = md5($password);//encrypt the password 

  	$query = "INSERT INTO Registration (name,email,university,password,phone_Number) 
  			  VALUES('$username', '$Email', '$University','$password_user','$Phone_no')";
  	mysqli_query($connect, $query);
    $query1 = "SELECT registration_ID FROM Registration WHERE name='$username' AND password='$password' ";
    $Registration_Id = mysqli_query($connect,$query1);
  	$_SESSION['user_ID'] = $Registration_Id;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: home.php');
  }

if (isset($_POST['login_user'])) {
  $user_ID = mysqli_real_escape_string($connect,$_POST['user_ID']);
  $password = mysqli_real_escape_string($connect,$_POST['Password']);
    $password = md5($password);
    $query = "SELECT * FROM Registration WHERE registration_Id ='$user_ID' AND password ='$password'";
    $results = mysqli_query($connect,$query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['user_ID'] = $user_ID;
      $_SESSION['success'] = "You are now logged in";
      header('location: home.php');
    }else {

     header('location: index.php');
    }
  }


?>
