<?php
    
        require_once('dbcon.php');
        session_start() ;
        if(isset($_POST['submit']))
        {
            if(empty($_POST['uname']) || empty($_POST['uroll']))
            {
                echo "Please fill the following fields!" ;
            }
            else{
                $var = "SELECT *FROM user WHERE name='".$_POST['uname']."' and rollno='".$_POST['uroll']."' ";
                $result = mysqli_query($cn,$var) ;
                if(mysqli_fetch_assoc($result))
                {
                    $_SESSION['username'] =$_POST['uname'];
                    header("location:show_result.php");
                }
                else{
                    echo "Wrong input details!" ;
                }
            }
        }
        
        
        ?>

