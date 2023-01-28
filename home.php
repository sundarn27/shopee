<?php
    session_start();
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link rel="stylesheet" href="home.css" class="style">
    <title>Document</title>
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
.nav{
    display: inline-block;
    position: sticky;
    height: 80px;
    width: 100%;
    box-shadow:-1px 2px 20px 0px;
    background: rgb(247, 65, 65);
    position: relative;
}
.side-nav h1{
    font-weight: 700;
    font-size: xxx-large;
    color: blueviolet;
    position: relative;
    top: 0px;
    left: 20px;
}
.title{
    position: relative;
    width: 225px;
    left: -45px;
    top: -12px;
}
.side-nav{
    width: 150px;
    height: 100%;
    background: rgb(247, 65, 65);
    position: fixed;
    top: 0;
    left: 0;
    padding: 20px 30px;
    box-shadow: 1px 3px 20px 1px;
}
.side-nav ul{
    display: inline-block;
    align-items: center;
    list-style: none;
    font-size: large;
    font-weight: 600;
    column-gap: 30px;
    position: relative;
    top: -10px;
    left: 18px;
}
.side-nav li{
    padding: 10px 0;
}
.side-nav li a{
    text-decoration: none;
    color: #fff;
    padding: 10px 14px ;
    font-size: medium;
}
.side-nav li img{
    width: 20px;
    position: relative;
    top: 4.5px;
    left: -28px;
}
.search{
    margin-top: 30px;
    margin-left: 30px;
    background: rgb(248, 248, 248);
    width: 600px;
    height: 40px;
    border-radius: 4px;
    display: flex;
    align-items: center;
    padding: 0 60px;
    outline: none;
    position: relative;
    top: -5px;
    left: 200px;
}
.search img{
    width: 18px;
    justify-content: left;
    margin-left: -50px;
    border-radius: 50%;
}
.search input{
    width: 100%;
    background: transparent;
    padding: 10px;
    outline: black;
    border: 2px;
    border-color: black;
}
::placeholder{
    font-size: medium;
    font-weight: 400;
    position: relative;
    left: 10px;
}
.select{
    width: 100px;
    position: relative;
    justify-content: right;
    margin-top: 30px;
    margin-left: 752px;
    height: 40px;
    top: -75px;
    left: 90px;
    border-radius: 6px;
    background: transparent;
    border: none;
    outline: none;
}
.active{
    display: none;
    background: #fff;
    width: 100%;
    height: 40px;
    position: absolute;
    left: 10px;
    top: 1%;
    z-index: -1;
    border-radius: 6px;
    box-shadow: 0 5px 10px rgba(255,255,255, 0.4);
}
.side-nav li:hover a{
    color: rgba(26, 2, 71, 0.671);
    transition: 0.3s;
}
.side-nav li:hover ~ .active{
    display: block;
}
.side-nav li:nth-child(1):hover ~ .active
{
    top: 1%;
}
.side-nav li:nth-child(2):hover ~ .active
{
    top: 21%;
}
.side-nav li:nth-child(3):hover ~ .active
{
    top: 41%;
}
.side-nav li:nth-child(4):hover ~ .active
{
    top: 61%;
}
.side-nav li:nth-child(5):hover ~ .active
{
    top: 81%;
}
.slider{
        position: relative;
        top: -20px;
        left: 300px;
        width: 980px;
        height: 480px;
        background: url(images/1.jpg);
        border-radius: 5px;
        margin: 5px 10px;
        box-shadow: 2px 2px 2px 2px;
        animation: slide 15s infinite;
}
@keyframes slide{
    25%{
        background: url(images/1.jpg);
    }
    50%{
        background: url(images/5.png);
    }
    75%{
        background: url(images/6.jpg);
    }
    100%{
        background: url(images/7.jpg);
    }
}
</style>
<body>

    <div class="nav">
        
        <div class="search">
            <img src="images/search.png">
            <input type="text" placeholder="Search">
        </div>
        <select name="" class="select">
            <option value="">All</option>
            <option value="">Mobiles</option>
            <option value="">Assesories</option>
            <option value="">Headphones</option>
            <option value="">Others</option>
        </select>
    </div>

    <div class="side-nav">
        <img src="images/title.png" class="title">
        <ul>
            <li><img src="images/home.png"><a href="home.php">HOME</a></li>
            <li><img src="images/products.png"><a href="products.php">PRODUCTS</a></li>
            <li><img src="images/myorders.png"><a href="order.php">MY ORDERS</a></li>
            <li><img src="images/about.png"><a href="about.html">ABOUT</a></li>
            <li><img src="images/logout.png"><a href="index.php">LOG OUT</a></li>
            <div class="active"></div>
        </ul>
    </div>
    
    <div class="slider">
        
    </div>
</body>
</html>