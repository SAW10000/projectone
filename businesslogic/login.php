<?php

include 'dbconnect.php';

if(!empty($_POST)) {
    
    $email = $_POST['email'];
    $password = md5($_POST['password']); 
    
    $checkm="SELECT * FROM user_tbl WHERE email='$email'";
    $res=mysqli_query($conn,$checkm);
    $numrows = mysqli_num_rows($res);
    if ($numrows>0) 
    {
        $checkp="SELECT * FROM user_tbl WHERE email='$email' AND password='$password'";
        $res=mysqli_query($conn,$checkp);
        $numrows = mysqli_num_rows($res);
        if ($numrows>0) 
        {
            echo json_encode('Login Successfull');
        }
        else
        {
            echo json_encode('Incorrect Password');
        }
    }
    else
    {
        echo json_encode('Wrong Email ID');
    }                                                                                            
    
}

?>
