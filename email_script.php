<!DOCTYPE html>
<html>
<body>


<?php

$from="test@vaughn_nichols@hotmail.com";
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['subject'];

mail ($name, $email, $subject, $message,"From:".$from);

print "your message has been sent to: </br>$email</br>$subject</br>$message</p>";


?>

</body>
</html>



