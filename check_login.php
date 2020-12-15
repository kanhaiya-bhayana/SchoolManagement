<?php
    
        require_once('dbcon.php');
        session_start() ;
        if(isset($_POST['submit']))
        {
            if(empty($_POST['uname']) || empty($_POST['pass']))
            {
                echo "Please fill the following fields!" ;
            }
            else{
                $var = "SELECT *FROM user where name='".$_POST['uname']."' and pass='".$_POST['pass']."' ";
                $result = mysqli_query($cn,$var) ;
                if(mysqli_fetch_assoc($result))
                {
                    $_SESSION['username'] =$_POST['uname'];
                    header("location:wlcmuser.php");
                }
                else{
                    echo "Wrong input details!" ;
                }
            }
        }
        
        
        ?>
      
      
    