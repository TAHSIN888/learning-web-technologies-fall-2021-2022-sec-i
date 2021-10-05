<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  
<style>
.error {color: #FF0000;}
</style>

<?php
 $genderErr =  "";

 $gender = "";

$degree = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  
    
 
  if (empty($_POST["gender"])) 
  {
    $genderErr = "Gender is required";
  } 
  else 
  {
    $gender = test_input($_POST["gender"]);
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

 
  
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>S


  <br><br>
  <input type="submit" name="submit" value="Submit">  

</form>

<?php
echo "<h2>Your Input:</h2>";


echo $gender;
echo "<br>";


?>

</body>
</html>
SS