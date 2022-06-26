<?php
    printf("<title>Excursy</title>");
    $name = $pass = $check1 =  "";
    if(isset($_POST['submit'])){
        
        $conn = mysqli_connect("localhost","root","mysql57","wpproject");
        if(!$conn){
            echo "Error while connect";
        }
        else{
            $name = $_POST["name"];
            $pass = $_POST["pass"];
            $usernameQuery="SELECT * FROM users WHERE Username='$name'";
            $emailQuery="SELECT * FROM users WHERE password='$pass'";
            $check1=mysqli_query($conn,$usernameQuery);
            $check2=mysqli_query($conn,$emailQuery);
            $dbCheck=1;
            if($check1 && $check1 ->num_rows>0){
                $username_error="This username is already Taken";
                $dbCheck=0;
                echo "sf2";
            }
            if($check2 && $check2->num_rows>0){
                $email_error="Email is already Registered";
                $dbCheck=0;
                echo "sfc";
            }
            if($dbCheck){
                $insertQuery="INSERT INTO users (Email,Pass) VALUES ('$name','$pass')";
                $insertCheck=mysqli_query($conn,$insertQuery);
                header('Location:../WP_Project/Login-page.php');
            } 
        }
     }
?>