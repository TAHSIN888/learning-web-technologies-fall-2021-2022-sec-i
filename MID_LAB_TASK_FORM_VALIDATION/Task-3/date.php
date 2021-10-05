<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  
<style>
.error {color: #FF0000;}
</style>

<?php


 $dateofbirthErr = "";

$dateofbirth = "";
    
  if (empty($_POST["birthday"])) 
  {
    $dateofbirthErr = "Date of Birth is required";
  } 
  else 
  {
    $dateofbirth = test_input($_POST["birthday"]);
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


  Date of Birth: <input type="date" name="birthday">
  <span class="error">* <?php echo $dateofbirthErr;?></span>
  <br><br>

  <input type="submit" name="submit" value="Submit">  

</form>

<?php
echo "<h2>Your Input:</h2>";

echo $dateofbirth;
echo "<br>";

?>

</body>
</html>
