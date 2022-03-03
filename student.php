<?php
  session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Student Login</title>
  </head>

  <body>
  
  <?php
  include 'navbar.php';
  ?>


<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $_SESSION['userid']=$_POST['userid'];
    $password=$_POST['password'];
    $sql="SELECT s_userid,s_name FROM `student` where s_userid='{$_SESSION['userid']}'";
    $result=mysqli_query($conn,$sql);
    if($result){
        if($password=='student')
        {
          $rows=mysqli_fetch_row($result);
          $_SESSION['name']=$rows[1];     
          echo "<script> alert('Login Successful');
                               window.location='checkdetails.php';
                     </script>";
                    
        }
  }
}
?>

  <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-light text-dark" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Student Login</h2>
              <p class="text-white-50 mb-5">Please enter your userid and password!</p>

              <form class="app-form" method="post">
              <div class="form-outline form-white mb-4">
                <input type="text" id="userid" name="userid" class="form-control form-control-lg" />
                <label class="form-label" for="userid">User Id</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" id="password" name="password" class="form-control form-control-lg" />
                <label class="form-label" for="password">Password</label>
              </div>

              <button class="btn btn-outline-dark btn-lg px-5" type="submit" name="submit">Login</button>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<footer class="text-center mt-5 py-2 bg-info">
        <p>&copy 2022. Made with &hearts; by <b>Tina Majumder</b> <br>@Heritage Institute of Technology</p>
      </footer>

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>