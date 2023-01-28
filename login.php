<?php 

include 'db_con.php';

if(isset($_GET["email"])){
    $email = $_GET['email'];
    $pass = $_GET['password'];

    // print_r($_GET);
    
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$pass'";
    $result = mysqli_query($conn,$sql);
    echo mysqli_num_rows($result);
    if(mysqli_num_rows($result) > 0){
        $_SESSION['email'] = $email;
        header("Location: http://localhost/shopee/home.php");
    }
    else{
        echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
    }
}

?>