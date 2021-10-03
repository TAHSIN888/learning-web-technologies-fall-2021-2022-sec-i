<?php

  if(isset($_REQUEST['submit'])){
    $name = $_REQUEST['myemail'];

     if (emptyempty($_POST["email"])) {  
         $nameErr = "Name is required";  
    } else {  
        $name = input_data($_POST["email"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
                $emailErr = "Only alphabets and white space are allowed";  
            }  
      echo "Your email is: ". $email;
    } 
  }
?>

<!DOCTYPE html>
<html>
<head>
<title>Email</title>
</head>
<body>
  <form method="post" action="#">
    <fieldset>
    <legend>Email</legend>
    <input type="Email" name="email" value=""> <br>
    <input type="submit" name="submit" value="Submit">
    </fieldset>
  </form>
  
</body>
</html>