<!DOCTYPE html>
<html>
<body>


<?php

$from="jasmine.minty@gmail.com";
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

mail($email, $subject, $message, "From:".$from);

print "your message has been sent to: </br>$email</br>$subject</br>$message</p>";


?>

</body>
</html>



