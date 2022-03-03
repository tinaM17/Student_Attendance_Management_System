<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Teacher & Student</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/createuser.css">
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
                <a class="nav-link" href="admin.php">Admin Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>
          </div>
       </nav>

<body>
<?php
    include 'config.php';
    if(isset($_POST['submit1'])){
    $t_userid=$_POST['t_userid'];
    $t_name=$_POST['t_name'];
    $t_email=$_POST['t_email'];
    $phone=$_POST['phone'];
    $t_course=$_POST['t_course'];
    $sql="insert into teacher(t_userid,t_name,t_email,phone,t_course) values('{$t_userid}','{$t_name}','{$t_email}','{$phone}','{$t_course}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Teacher Added Successfully!!!');
                               window.location='addclass.php';
                     </script>";
                    
    }
  }
?>

        <h2 class="text-center pt-4">ADD A TEACHER</h2>
        <br>

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
          <img class="img-fluid" src="img/user.jpg" style="border: none; border-radius: 50%;">
        </div>
        <div class="screen-body-item">
          <form class="app-form" method="post">
          <div class="app-form-group">
              <input class="app-form-control" placeholder="USER_ID" type="text" name="t_userid" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="NAME" type="text" name="t_name" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="EMAIL" type="email" name="t_email" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="PHONE" type="text" name="phone" required>
            </div>
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
            <div class="app-form-group button">
              <input class="app-form-button" type="submit" value="ADD" name="submit1"></input>
              <input class="app-form-button" type="reset" value="RESET" name="reset"></input>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
    if(isset($_POST['submit2'])){
    $s_userid=$_POST['s_userid'];
    $s_name=$_POST['s_name'];
    $s_email=$_POST['s_email'];
    $year=$_POST['year'];
    $s_course=$_POST['s_course'];
    $roll=$_POST['roll'];
    $sem=$_POST['sem'];
    $batch_id=$_POST['batch_id'];
    $sql="insert into student(s_userid,s_name,s_email,year,s_course,roll,sem,batch_id) values('{$s_userid}','{$s_name}','{$s_email}','{$year}','{$s_course}','{$roll}','{$sem}','{$batch_id}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Student Added Successfully');
                               window.location='addclass.php';
                     </script>";
                    
    }
  }
?>

        <h2 class="text-center pt-4">ADD A STUDENT</h2>
        <br>

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
              <input class="app-form-control" placeholder="USER_ID" type="text" name="s_userid" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="NAME" type="text" name="s_name" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="EMAIL" type="email" name="s_email" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="YEAR" type="number" name="year" min="2010" max="2022" required>
            </div>
            <div class="app-form-group">  
            <label>COURSE</label> 
             <select class="app-form-control" name="s_course">  
             <option value="COURSE">COURSE</option>  
             <option value="BCA">BCA</option>  
             <option value="BBA">BBA</option>  
             <option value="B.Tech">B.Tech</option>  
             <option value="MBA">MBA</option>  
             <option value="MCA">MCA</option>  
             <option value="M.Tech">M.Tech</option>  
            </select>  
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="ROLL NO." type="number" name="roll" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="SEMESTER" type="number" name="sem" min="1" max="8" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="BATCH_ID" type="text" name="batch_id" required>
            </div>
            <div class="app-form-group button">
              <input class="app-form-button" type="submit" value="ADD" name="submit2"></input>
              <input class="app-form-button" type="reset" value="RESET" name="reset"></input>
            </div>
          </form>
        </div>
      </div>
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