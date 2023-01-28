<?php

include 'db_con.php';

if(isset($_GET['create'])){

    $name = $_GET['name'];
    $email = $_GET['email'];
    $pass = $_GET['password'];

    $sql = "INSERT INTO users (name,email,password) VALUES ('$name','$email','$pass')";
    $result = mysqli_query($conn,$sql);    
    if(!$result){
        echo "<script>alert('Woops! Email is Already Taken!')</script>";
    }
    else{
        echo "<script>alert('Successfully Created.')</script>";
        header("Location: http://localhost/major/home.php");
    }

}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link rel="stylesheet" href="signup.css">
   
</head>
<style>
    *{
    margin: 0%;
    padding: 0%;
}
body{
    background: rgba(236, 235, 235, 0.87);
    background: cover;
    background-position: center;
}
.logo img{
    width: 300px;
    display: flex;
    align-items: center;
    position: relative;
    top: -80px;
    left: 540px;
}
.login-box{
    position: relative;
    height: 500px;
    width: 350px;
    background: rgb(247, 65, 65);
    border-radius: 15px;
    box-shadow: 1px 2px 15px 4px;
    top: 60px;
    left: 510px;
}
h1{
    position: relative;
    box-shadow: black;
    font-family: sans-serif;
    font-weight: 600;
    left: 115px;
    top: 10px;
    user-select: none;
}
input{
    display: block;
    margin: 55px 0;
    outline: none;
    border: none;
    border-bottom:1px black;
    background: transparent;
    border-bottom: 1px solid rgb(51, 46, 46);
    border-bottom-left-radius: 2px;
    font-family: sans-serif;
    font-weight: 600;
    width: 200px;
}
.login{
    position: relative;
    top: 30px;
    left: 90px;
}
::placeholder{
    color: rgb(49, 46, 46);
    font-size: medium;
}
.btn{
    position: relative;
    background: transparent;
    border: none;
    padding: 10px 20px;
    border: 1px solid rgb(61, 56, 56);
    border-radius: 5px;
    top: 5px;
    left: -12px;
    color: rgb(255, 255, 255);
    box-shadow: 2px 2px 20px 1px rgb(0 0 0 / 87%);
}
h3{
    position: relative;
    top: -5px;
    left: 135px;
    user-select: none;
}
.login-box a{
    position: relative;
    text-decoration: none;
    top: 10px;
    left: 140px;
    color: rgb(199, 184, 184);
    border: 1px solid whitesmoke;
    border-radius: 5px;
    padding: 4px 10px;
}

</style>
<body>
    <div class="login-box">
        <div>
            <h1>Sign Up</h1>
        </div>
        <div class="login">
            <form action="signup.php" method="GET">
                <input type="text" name="name" placeholder=" Enter Username " required="">
                
                <input type="email" name="email" placeholder=" Enter Email ID " required="">

                <input type="password" name="password" placeholder=" Enter Password " required="">
                
                <input type="password" name="password" placeholder=" Re-Enter Password " required="">

                <input class="btn" type="submit" name="create" value="Sign Up" >
            </form>
        </div>
        
</body>
</html>