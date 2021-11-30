<?php

$count = 0;
$error = '';
if(isset($_POST['submit']))
{
 $name = '';
 $phone = '';
 $email = '';
 $address = '';
 if(empty($_POST['name']))
 {
  $error .= '<p class="text-danger">Name is Required</p>';
 }
 else
 {
  if(!preg_match("/^[a-zA-Z ]*$/",$_POST["name"]))
  {
   $error .= '<p class="text-danger">Only Alphabet allowed in Name</p>';
  } 
  else
  {
   $name = $_POST['name'];
  }
 }
 
 if(empty($_POST["email"]))
 {
  $error .= '<p class="text-danger">Email Address is Required</p>';
 }
 else
 {
  if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
  {
   $error .= '<p class="text-danger">Invalid email format</p>';
  }
  else
  {
   $email = $_POST["email"];
  }
 }
 
 if(empty($_POST["phone"]))
 {
  $error .= '<p class="text-danger">Phone Number is Required</p>';
 }
 else
 {
  if(!preg_match("/^[0-9]*$/",$_POST["phone"]))
  {
   $error .= '<p class="text-danger">Only Numbers allowed in Phone</p>';
  }
  else
  {
   $phone = $_POST["phone"];
  }
 }
 
 if(empty($_POST["address"]))
 {
  $error .= '<p class="text-danger">Address is Required</p>';
 }
 else
 {
  $address = $_POST["address"];
 }
 
 if($error == '')
 {
  $count = $count + 1;
  $error = '<label class="text-success">Form Data Submitted</label>';
 }

 
}

?>