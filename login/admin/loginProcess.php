<?php
session_start();
if(isset($_POST['save']))
{
    extract($_POST);
    include 'config.php';
    $sql=mysqli_query($conn,"SELECT * FROM member where email='$email' and password='md5($password)'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["id"] = $row['id'];
        $_SESSION["fullName"]=$row['fullName'];
        $_SESSION["address"]=$row['address'];
        $_SESSION["Nic"]=$row['Nic']; 
        $_SESSION["idProof"]=$row['idProof'];
        $_SESSION["why"]=$row['why'];
        $_SESSION["issueProof"]=$row['issueProof'];
        $_SESSION["email"]=$row['email'];
        $_SESSION["password"]=$row['password'];
        header("location:thank.html");
    }
    else
    {
        echo "Invalid Email ID/Password";
    }
}
?>