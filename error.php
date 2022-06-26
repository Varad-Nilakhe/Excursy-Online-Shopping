<?php
    printf("<title>Excursy</title>");
    // if(isset($_POST['submit'])){
    $username=$userpass="";
    $name=$pass="";
    $conn = mysqli_connect("localhost","root","mysql57","wpproject");
    if(isset($_POST['submit'])){
        if(!$conn){
            echo "Connection error".mysqli_connect_error();
        }
        else{
            
            $usernameQuery="SELECT * FROM Users WHERE Email = "$name"";
                    $emailQuery="SELECT * FROM Users WHERE Pass ='$pass'";        
                    $check1=mysqli_query($conn,$usernameQuery);
                    $check2=mysqli_query($conn,$emailQuery);
                    $dbCheck=1;
                    if($check1->num_rows>0){​​​​​​
                              $username_error="This username is already Taken";
                              $dbCheck=0;
                    }
                    if($check2->num_rows>0){​​​​​​
                              $email_error="Email is already Registered";
                             $dbCheck=0;
                    }
                    if($dbCheck){​​​​​​
                              $insertQuery="INSERT INTO Users (Email,Pass) VALUES ('$name','$pass')";
                              $insertCheck=mysqli_query($conn,$insertQuery);
                              session_start();
                              $_SESSION['username']=$_POST['name'];
                              header('Location:../project/Login-page.php');
                    }
        }
    }
    
    
?>