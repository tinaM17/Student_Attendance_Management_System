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
    <link rel="stylesheet" type="text/css" href="css/createuser.css">

    <title>Take Attendance</title>
  </head>

  <!-- navbar --> 
      <nav class="navbar navbar-expand-md navbar-light bg-info sticky-top" >
      <a class="navbar-brand" href="index.php">Student Attendance System</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="teacher.php">Teacher Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>
          </div>
       </nav>

<body>
   <h1 class="text-center">
     <?php
    echo "Welcome,".$_SESSION['name'];

    ?>
    </h1>

    
<?php
    include('config.php');
    try{
      
    if(isset($_POST['att'])){

      $stat_id = $_POST['stat_id'];
      $st_status = $_POST['st_status'];
      for ($x=0;$x<$_SESSION['i'];$x++) {
        $dp = date('Y-m-d');
        $sql = "INSERT into attendance(stat_id,s_course,t_subject,st_status,stat_date) values('{$stat_id[$x]}','{$_SESSION['course']}','{$_SESSION['subject']}','{$st_status[$x]}','{$dp}')";
        $stat = mysqli_query($conn,$sql);

        $att_msg ="Attendance Recorded.";
      }

    }
  }
  catch(Execption $e){
    $error_msg = $e->$getMessage();
  }
 ?>

  <div class="content text-center" >
    <h3>Attendance of <?php echo date('Y-m-d'); ?></h3>
    <br> 
    <center><p><?php if(isset($att_msg)) echo $att_msg; if(isset($error_msg)) echo $error_msg; ?></p></center> 
</div>
  <div class="background" style="background-image: url('https://i.pinimg.com/originals/74/43/a3/7443a31b6a19e5630b94a6538ff9bdd1.gif');">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <img class="img-fluid" src="img/student.png" style="border: none; border-radius: 50%;">
        </div>
        <div class="screen-body-item">
          <form class="app-form" method="post">
            <div class="app-form-group"> 
              <label>COURSE</label> 
             <select name="t_course" class="app-form-control">  
             <option value="">--COURSE--</option>  
             <option value="BCA">BCA</option>  
             <option value="BBA">BBA</option>  
             <option value="B.Tech">B.Tech</option>  
             <option value="MBA">MBA</option>  
             <option value="MCA">MCA</option>  
             <option value="M.Tech">M.Tech</option>  
            </select>  
            </div>
            <div class="app-form-group"> 
              <label>SUBJECT</label> 
             <select name="t_subject" class="app-form-control">  
             <option value="">--SUBJECT--</option>  
             <option value="JAVA">JAVA</option>  
             <option value="PYTHON">PYTHON</option>  
             <option value="NETWORKING">NETWORKING</option>  
             <option value="DSA">DSA</option>  
             <option value="OPERATING SYSTEM">OPERATING SYSTEM</option>  
             <option value="DBMS">DBMS</option>  
            </select>  
            </div>

            <div class="app-form-group button">
              <input class="app-form-button" type="submit" value="SHOW" name="batch"></input>
              <input class="app-form-button" type="reset" value="RESET" name="reset"></input>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<form class="app-form" method="post">
    <table class="table table-stripped">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Department</th>
          <th scope="col">Roll</th>
          <th scope="col">Semester</th>
          <th scope="col">Email</th>
          <th scope="col">Subject</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
   <?php

    if(isset($_POST['batch'])){

     $_SESSION['i']=0;
     $radio = 0;
     $_SESSION['course'] = $_POST['t_course'];
     $_SESSION['subject'] = $_POST['t_subject'];
     $sql = "SELECT * from student where s_course='{$_SESSION['course']}' order by roll asc";
     $results = mysqli_query($conn,$sql);

     while ($data = mysqli_fetch_array($results)) {
       $_SESSION['i']++;
     ?>
  <body>
     <tr>
       <td><?php echo $data['s_userid']; ?> <input type="hidden" name="stat_id[]" value="<?php echo $data['s_userid']; ?>"> </td>
       <td><?php echo $data['s_name']; ?></td>
       <td><?php echo $data['s_course']; ?></td>
       <td><?php echo $data['roll']; ?></td>
       <td><?php echo $data['sem']; ?></td>
       <td><?php echo $data['s_email']; ?></td>
       <td><?php echo $_SESSION['subject']; ?></td>
       <td>
         <label>Present</label>
         <input type="radio" name="st_status[<?php echo $radio; ?>]" value="Present" checked>
         <label>Absent </label>
         <input type="radio" name="st_status[<?php echo $radio; ?>]" value="Absent">
       </td>
     </tr>
  </body>

     <?php

        $radio++;
      } 
}
      ?>
    </table>

    <center><br>
    <input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="Save!" name="att" />
  </center>

  </div>

</div>
</form>

<footer class="text-center mt-5 py-2 bg-info">
        <p>&copy 2022. Made with &hearts; by <b>Tina Majumder</b> <br>@Heritage Institute of Technology</p>
      </footer>

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>