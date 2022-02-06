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
    if(isset($_POST['password']) && isset($_Post['hash']))
    {
        $password = $_POST['password'];
        $hash = $_Post['hash'];
        if(password_verify($password,$hash))
        {
            echo 'The password'. $password .'was verified against the hash'. $hash .'<br/>';
        }
        else
        {
            echo 'Password was not verified <br/>';
        }
    
    }
    ?>
<form action="verify.php" method="post">
<label>Enter Password To hash</label>
<input type="text" name="password" id="hash"/>

<br/>
<label>Enter Password To verify</label>
<input type="text" name="hash" id="hash"/>
<input type="submit" name="sub" value="Submit" />
    </form>
</body>
</html>