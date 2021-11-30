$(document).ready(function(){
  
 <?php
 if($count == 0)
 {
 ?>
 $('#name').savy('load');
 $('#email').savy('load');
 $('#phone').savy('load');
 $('#address').savy('load');
 $('#gender').savy('load');
 $('#php_language').savy('load');
 $('#java_language').savy('load');
 $('#net_language').savy('load');
 <?php
 }
 else
 {
 ?>
 $('#name').savy('destroy');
 $('#email').savy('destroy');
 $('#phone').savy('destroy');
 $('#address').savy('destroy');
 $('#gender').savy('destroy');
 $('.languages').savy('destroy');
 $('#php_language').savy('destroy');
 $('#java_language').savy('destroy');
 $('#net_language').savy('destroy');
 <?php
 }
 ?>
 
});