<?php
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $number = $_POST['number'];
    

    // Database connection
   $conn = mysqli_connect('localhost','root','','kyau') or die("Connection Failed");
   if($password == $confirmpassword){
   $sql = "INSERT INTO registration (firstName,lastName,gender,email,department,password,confirm_password,number) VALUES ('$firstName','$lastName','$gender','$email','$department','$password','$confirmpassword','$number')";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

        if($result){
            echo "Form submitted successfully";
        }else{
            echo "Form submition failed";
        }

      }else{
        echo "password and confirm_password mismatch";
    }

    
   mysqli_close($conn); 
?>
