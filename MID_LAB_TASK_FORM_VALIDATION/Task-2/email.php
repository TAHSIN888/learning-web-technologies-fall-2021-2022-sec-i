<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  
<style>
.error {color: #FF0000;}
</style>

<?php
 $emailErr = "";

$email = "";

$degree = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  


  if (empty($_POST["email"])) 
  {
    $emailErr = "Email is required";
  } 
  else 
  {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
      $emailErr = "Invalid email format";
      $email="";
    }
  }
    
 
}

function test_input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Validation Form </h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

 

  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>

 
  
  
  <br><br>
  <input type="submit" name="submit" value="Submit">  

</form>

<?php
echo "<h2>Your Input:</h2>";

echo $email;
echo "<br>";




?>

</body>
</html>
