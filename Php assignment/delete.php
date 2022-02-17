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

include 'connection.php';
$query="delete from image_upload where Image_id=".$_GET['id'];
$result = mysqli_query($conn,$query);

if($result)
{
    header("Location:Index.php");
}

?>
</body>
</html>