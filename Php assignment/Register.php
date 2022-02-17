<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Aviato | E-commerce template</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Constra HTML Template v1.0">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  
  <!-- Animate css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">
  <?php
      include 'connection.php';
if(isset($_POST['sub']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$username=$_POST['username'];
$Email_address=$_POST['Email_address'];
$City_id=$_POST['City_id'];
$Contact=$_POST['Contact'];
$Gender=$_POST['Gender'];
$Pass=$_POST['Pass'];
$hash = password_hash($Pass,PASSWORD_DEFAULT);
$query_insert="insert into register values(null,'$fname','$lname','$Email_address','$Contact','$Gender',$City_id,'$hash','$username')";
$result=mysqli_query($conn,$query_insert);  
if($result)
{
    header("Location:Login.php");

}
else
{
    echo'error';
}
}  
   ?>
        </head>

<body id="body">

<section class="signin-page account">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="block text-center">
          <a class="logo" href="Register.php">
            <img src="images/logo.png" alt="">
          </a>
          <h2 class="text-center">Create Your Account</h2>
          <form class="text-left clearfix" action="Register.php" method="post">
          <label>First Name</label>
            <div class="form-group">
              <input type="text" class="form-control" name="fname">
            </div>
            <label>Last Name</label>
            <div class="form-group">
              <input type="text" class="form-control"  name="lname">
            </div>
            <label>Username</label>
            <div class="form-group">
              <input type="text" class="form-control"  name="username">
            </div>
            <label>Email</label>
            <div class="form-group">
              <input type="email" class="form-control"  name="Email_address">
            </div>
            <label>City</label>
            <div class="form-group">
            <select name="City_id" class="form-control">
        <?php
        
        $query_select= "select * from city";
        $res=mysqli_query($conn,$query_select);
        while($row=mysqli_fetch_array($res)) 
              {
                
                        echo '<option value='.$row['City_id'].'>'.$row['City_name'].'</option>';
                        
                      }
   ?>    </select>
    <br/>
            <label>Contact</label>
            <div class="form-group">
              <input type="number" class="form-control"  name="Contact">
            </div>
            <label>Gender</label>
           <center>
            <div class="form-group">
                <label>Male</label>
              <input type="radio"  name="Gender" value="Male">
              <label>Female</label>
              <input type="radio"  name="Gender" value="Female">
            </div></center>
            <label>Password</label>
            <div class="form-group">
              <input type="password" class="form-control" name="Pass">
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-main text-center" name="sub">Sign Up</button>
            </div>
          </form>
          <p class="mt-20">Already hava an account ?<a href="#"> Login</a></p>
          <p><a href="#"> Forgot your password?</a></p>
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Main jQuery -->
    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap Touchpin -->
    <script src="plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
    <!-- Instagram Feed Js -->
    <script src="plugins/instafeed/instafeed.min.js"></script>
    <!-- Video Lightbox Plugin -->
    <script src="plugins/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
    <!-- Count Down Js -->
    <script src="plugins/syo-timer/build/jquery.syotimer.min.js"></script>

    <!-- slick Carousel -->
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/slick/slick-animation.min.js"></script>

    <!-- Google Mapl -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script type="text/javascript" src="plugins/google-map/gmap.js"></script>

    <!-- Main Js File -->
    <script src="js/script.js"></script>
    


  </body>
  </html>