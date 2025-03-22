<?php
if(isset($_POST["submit"])) { 
$name = $_POST["name"];
$phonenumber = $_POST["phonenumber"];
echo "The name you submitted is $name and the phone number is: $phonenumber";
};
?>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="project.css">
</head>
<body>  
<div class="center">
<form method="POST" action="message.php">
Your name: <input type="text" name="name"><br>
Your phone number: <input type="tel" name="phone number"><br>
Your request: <input type="text" name="Request"><br>
<input type="submit" name="submit">
</div>
</form>
</body>
</html>

