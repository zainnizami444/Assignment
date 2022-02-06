<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['password']))
    {
        $password = $_POST['password'];
        $hash = password_hash($password,PASSWORD_DEFAULT);
        echo 'The hash or the password'.$password.'is'.$hash.'<br/>';


    }
    ?>
    <form action="encrypt.php" method="post">
<label>Enter Password To hash</label>
<input type="text" name="password"/>
<input type="submit" name="sub" value="Submit"/>
    </form>
</body>
</html>