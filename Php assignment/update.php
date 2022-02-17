<?php
 include 'Header.php';
?>
<?php
    include 'connection.php';
  

    $query_select="select * from image_upload where Image_id=".$_GET['id'];
   $result =  mysqli_query($conn,$query_select);

  $row=mysqli_fetch_array($result);
  
  if(isset($_POST['update']))
  {
    $imgid=$_POST['imgid'];
    $imgname=$_FILES['Image_upload']['name'];
    $imgsize=$_FILES['Image_upload']['size'];
    $imgtype=$_FILES['Image_upload']['type'];
    $temp_name=$_FILES['Image_upload']['tmp_name'];
    $query_update="update image_upload set 	Image_name='$imgname',Image_extension='$imgsize',Image_size=' $imgtype' where Image_id='$imgid'";

    $result=mysqli_query($conn,$query_update);

    if($result)
    {
      header("Location:Index.php");
    }
    else{
      echo 'error';
    }
  }

?>

<body>
    
<form action="update.php" method="post" enctype="multipart/form-data">
    <input type="hidden" value="<?php echo $row['Image_id']  ?> " name="imgid"/>
    <input type="file" name="Image_upload" class="form-control" value="<?php echo $row['Image_name']  ?>"/>
    <input type="submit" name="update" Value="Insert Image" class="form-control"/>
</form>
</body>
<?php
 include 'Footer.php';
 ?>