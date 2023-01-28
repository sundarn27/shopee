<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="about.css">
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
.main-content{
    height: 520px;
    width: 1260px;
}
.title{
    position: relative;
    width: 225px;
    left: -45px;
    top: -12px;
}
button a{
    position: relative;
    text-decoration: none;
    color: black;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    left: 1240px;
    top: 35px;
    font-size: medium;
    padding: 10px 20px;
    border-radius: 15px;
    box-shadow: 1px 2px 15px 4px;
    border-radius: 5px;
    background-color: rgb(247, 65, 65);
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
.card{
    position: fixed;
    height: 400px;
    width: 800px;
    background: rgb(255, 255, 255);
    border-radius: 15px;
    box-shadow: 1px 2px 15px 4px;
    Top: 750px;
    left: 575px;
    text-decoration: none;
    align-items: center;
    margin: -620px -200px;
}
.card h1{
    position: relative;
    font-size: x-large;
    font-family: 'Times New Roman', Times, serif;
    top: 20px;
    left: 320px;
    text-decoration: none;
}
.card img{
    position: relative;
    width: 425px;
    top: 30px;
    left: 170px;
}
.card h2{
    position: relative;
    font-size: large;
    font-family: 'Times New Roman', Times, serif;
    top: 20px;
    left: 360px;
    text-decoration: none;
    align-items: center;
}
.card h4{
    position: relative;
    font-size: medium;
    font-family: 'Times New Roman', Times, serif;
    top: 20px;
    left: 300px;
    text-decoration: none;
    align-items: center;
}
</style>
<body>
    <div class="side-nav">
        <img src="images/title.png" class="title">
        <ul>
            <li><img src="images/home.png"><a href="home.php">HOME</a></li>
            <li><img src="images/products.png"><a href="products.html">PRODUCTS</a></li>
            <li><img src="images/myorders.png"><a href="order.php">MY ORDERS</a></li>
            <li><img src="images/about.png"><a href="about.php">ABOUT</a></li>
            <li><img src="images/logout.png"><a href="index.php">LOG OUT</a></li>
            <div class="active"></div>
        </ul>
    </div>

    <div class="main-content">
        <button>
            <a href="home.php">BACK</a>
        </button>
    </div>
    <div class="card">
        <img src="images/title.png" alt="">
        <h1>Contact & Help</h1>
        <br>
        <h2>&ensp;Email</h2>
        <h4>&ensp;&ensp;onlineshoppe@gmail.com</h4>
        <br>
        <h2>WhatsApp</h2>
        <h4>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;+91 9394957372</h4>
        <br>
        <h2>Instagram</h2>
        <h4>&ensp;&ensp;&ensp;&ensp;&ensp;onlineshoppe_tcr</h4>
    </div>
</body>
</html>