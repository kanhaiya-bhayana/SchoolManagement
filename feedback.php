<?php
        require_once('dbcon.php');
       if(isset($_POST['submit']))
	   {
            $name=$_POST['e1'];
            $std=$_POST['e2'];
            $msg=$_POST['e3'];
            
            
   $query = mysqli_query($cn,"insert into feedback(name,std,msg)values('$name','$std','$msg')");
	if($query === TRUE)
	{
		echo "<script>alert('Feedback Submitted Sucessfully!');window.location.href='../fullwebsite/home.html';</script>" ;
	}
	else
	{
	echo "<script>alert('Error: Try Again!');window.location.href='../fullwebsite/feedback.html';</script>" ;
    
    }
	   }
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main_div">
        <div class="first">
            <div class="fixed-header" id="top">
                <div class="logo">
                    <img src="logo.png" height="70" width="100">
                    <span class="img_logo"> School Management</span>
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
                    <a href="feedback.php">Feedback</a>
                </nav>
        </div> 
         </div>
         <div class="content" id="right">
         <div class="container" id="content">
            <h2>Feedback</h2>
            <form name="f1" action="feedback.php" method="POST">
                <table>
                    <tr>
                        <td><b>Student Name :-</b></td>
                        <td><input type=" text "  class="input-field" name="e1"></td>
                    </tr>
                    <tr>
                       <td><b>Class :-</b></td>
                       <td><input type=" text " class="input-field" name="e2"></td>
                   </tr>
                   <tr>
                       <td><b>Feedback :-</b></td>
                       <td><textarea cols="16"class="input-field" rows="5" name="e3"></textarea></td>
                   </tr>
                   <tr>
                       <td colspan="2">
                           <input type="submit" name="submit" value="Submit">
                       </td>
                   </tr>
                </table>
            </form>
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