<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
}
</style>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main_div">
        <div class="first">
            <div class="fixed-header" id="top">
                <div class="logo">
                    <img src="logo.png" height="70" width="100">
                    <span class="img_logo">  School Management</span>
                </div>
            </div>
        </div>
        <div class="second">
         <div class="aside" id="left">
            <div class="fixed-link" id="menu">
                <nav>
                    <a href="home.html">Home</a>
                    <a href="attendance.html">Attendance</a>
                    <a href="results.html">Results</a>
                    <a href="feedback.html">Feedback</a>
                </nav>
        </div> 
         </div>
         <div class="content" id="right">
            <div class="container" id="content">
            <button style="margin-right:-200;float:right;" class="btn btn-primary"><a style="color:Black;text-decoration:none;" href="logout.php?logout">Logout</a></button>
          <br><br>
         
          <!--Displaying the name with the session...-->
          <?php
          require_once('dbcon.php');
          error_reporting(0);
             session_start() ;
             if(isset($_SESSION['username']))
                 {
                 //  $var1=$_SESSION['username'];
                  echo '<h3>Welcome ' .$_SESSION['username'].'</h3><br>';                            
                 }
              else
                 {
                  header("location:index.html") ;
                 }
          ?>
            <?php
              $sql1 = "SELECT * FROM user where name='".$_SESSION['username']."' and status='true' ";
              
              $res1 = mysqli_query($cn,$sql1);
                while($row = $res1->fetch_assoc() )
                {
                    $st=$row['status'];
                    $r_no=$row['rollno'];
                    $percent=$row['percentage'];
               }
               if($st == "true")
                { 
              ?>
  
            <table style="width:100%">
              <thead>
                <tr>
                  <th scope="col">Roll No</th>
                  <th scope="col">Score</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php echo $r_no; ?></td>
                  <td><?php echo $percent; ?></td>
                </tr>
                
              </tbody>
            </table>
            <?php
            
        }
        else
            {
                ?>
                  <h3>Sorry Your result cannot be display because your parents haven't seen yet !</h3>
                <?php
            }
            ?>
            </div>
    
         </div>
        </div>
        <div class="third">
            <div class="fixed-footer" id="footer">
            &copy; School Management
            </div>
        </div>
    </div>
</body>
</html>