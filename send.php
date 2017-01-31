<?php
$name = $_POST ['name'];
$message = $_POST['message'];
$to = "mathewthomason@outlook.com";
$subject = "New Message";
$email = $_POST ['email'];

mail ($to, $subject, $message, "From" . $name . $email);
echo '<script type="text/javascript">',
     'alert("Your message has been sent! Press OK to confirm.");',
     '</script>';
echo '<script type="text/javascript">',
          'window.location.replace("https://airstardev.000webhostapp.com/#");',
          '</script>';
 ?>
