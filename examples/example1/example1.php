<?php
include "../version/1.0.0/Gravatar.php";

if(!empty($_POST['email'])){
    $email = $_POST['email'];
$gravatar->getAvatar($email,'identicon');

}

?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Gravatar library example</title>
</head>
<body>
<form method="post">

    <input type="email" name="email"/>
    <input type="submit" value="submit">

</form>
</body>
</html>