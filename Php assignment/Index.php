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
 include 'Header.php';
if(isset($_POST['sub']))
{
    $imgname=$_FILES['Image_upload']['name'];
    $imgsize=$_FILES['Image_upload']['size'];
    $imgtype=$_FILES['Image_upload']['type'];
    $temp_name=$_FILES['Image_upload']['tmp_name'];
   
    if($imgtype=="image/png"||$imgtype=="image/jpeg"||$imgtype=="image/jpg")
    {
 $query_insert="insert into image_upload values(null,'$imgname','$imgtype',$imgsize)";
  move_uploaded_file($temp_name,'img/'.$imgname);
 $result_insert = mysqli_query($conn,$query_insert);
 if($result_insert)
 {
    echo'<script> alert("Image Inserted") </script>';
 }
  else
    {
    echo'<script> alert("Image Not Inserted") </script>';
  }
    
    
  }}
 ?>

<form action="Index.php" method="post" enctype="multipart/form-data">
    <input type="file" name="Image_upload" class="form-control" />
    <input type="submit" name="sub" Value="Insert Image" class="form-control"/>
</form>
<?php

$query_select="select * from image_upload";
$result_select=mysqli_query($conn,$query_select);
 
echo '<table border=1 class="table"> ';
echo '<tr>';
echo '<th>Image</th>';
echo '<th>Image Name</th>';
echo '<th>Image type</th>';
echo '<th>Update</th>';
echo '<th>Delete</th>';
echo '</tr>';
while($row=mysqli_fetch_array($result_select))
{

echo '<tr>';
echo '<td><img src="img/'.$row['Image_name'].'" width="100" height="100">'.'</td>';
echo '<td>'.$row['Image_name'].'</td>';
echo '<td>'.$row['Image_extension'].'</td>';
echo '<td>'.'<a href='.'delete.php?id='.$row['Image_id'].'>Delete</a>'.'</td>';
echo '<td><a href='.'update.php?id='.$row['Image_id'].'>update</a></td>';
}
echo '</table>';
if(isset($_POST['sub_email'])){
$to='zainnizami999@gmail.com';
$subject='Hello from xampp';
$message='test';
$headers='zainnizami999@gmail.com';
if(mail($to,$subject,$message,$headers))
{
    echo'<script> alert("Success") </script>';
}
else
{
    echo'<script> alert("Error") </script>';
}
}
?>

<?php
 include 'Footer.php';
 ?>
</body>
</html>