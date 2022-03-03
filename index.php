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

    <title>Student Attendance System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
      <div class="container-fluid" style="background-image:;">
      <!-- Introduction section -->
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5" style="background-image: ;">
                  <h3>Welcome to</h3>
                  <h1>Heritage Institute of Technology</h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img/hitk.jpg" class="img-fluid pt-2" style="width: 400px;">
              </div>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/user.jpg" class="img-fluid">
                    <br>
                    <a href="teacher.php"><button>TEACHER LOGIN</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/login1.png" class="img-fluid">
                    <br> <br>
                    <a href="admin.php"><button>ADMIN LOGIN</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/student.png" class="img-fluid">
                    <br> <br>
                    <a href="student.php"><button>STUDENT LOGIN</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2 bg-info">
        <p>&copy 2022. Made with &hearts; by <b>Tina Majumder</b> <br>@Heritage Institute of Technology</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>