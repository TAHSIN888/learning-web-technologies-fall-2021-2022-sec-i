<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  
<style>
.error {color: #FF0000;}
</style>

<?php
$bloodgroupErr = "";

$bloodgroup ="";

$degree = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  

    if (empty($_POST["blood_group"])) 
  {
    $bloodgroupErr = "Blood_Group is required";
  } 
  else 
  {
    $bloodgroup = test_input($_POST["blood_group"]);
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




  Blood Group:
  <select name="bloodgroup">
  <option></option>
  <option name="bloodgroup" <?php if (isset($bloodgroup) && $bloodgroup=="a+") echo "checked";?> value="a+">A+</option>
  <option name="bloodgroup" <?php if (isset($bloodgroup) && $bloodgroup=="a-") echo "checked";?> value="a-">A-</option>
  <option name="bloodgroup" <?php if (isset($bloodgroup) && $bloodgroup=="b+") echo "checked";?> value="b+">B+</option>
  <option name="bloodgroup" <?php if (isset($bloodgroup) && $bloodgroup=="b-") echo "checked";?> value="b-">B-</option>
  <option name="bloodgroup" <?php if (isset($bloodgroup) && $bloodgroup=="o+") echo "checked";?> value="o+">O+</option>
  <option name="bloodgroup" <?php if (isset($bloodgroup) && $bloodgroup=="o-") echo "checked";?> value="o-">O-</option>
   <option name="bloodgroup" <?php if (isset($bloodgroup) && $bloodgroup=="ab+") echo "checked";?> value="ab+">AB+</option>
  <option name="bloodgroup" <?php if (isset($bloodgroup) && $bloodgroup=="ab-") echo "checked";?> value="ab-">AB-</option>
  </select>
  <span class="error">* <?php echo $bloodgroupErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  

</form>

<?php
echo "<h2>Your Input:</h2>";


echo $bloodgroup;
?>

</body>
</html>
