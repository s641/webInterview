<?php
include_once "user.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $account = $_POST["account"];
  $password = $_POST["password"];
	
  $user = new User();
  if ($user->checkLogin($account,$password)) {
    session_start();
    $_SESSION["user"] = $account;
    header("location:index.php");
  } else {
    header("location:login.php");
  }
}