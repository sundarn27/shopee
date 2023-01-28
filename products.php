<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link rel="stylesheet" href="products.css" class="style">
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
.card-1 a,.card-2 a,.card-3 a{
    text-decoration : none;
    color : black;
}
.card-1{
    position: relative;
    height: 350px;
    width: 275px;
    background: rgb(255, 255, 255);
    border-radius: 15px;
    box-shadow: 1px 2px 15px 4px;
    Top: 125px;
    left: 275px;
    text-decoration: none;
}
.card-1 h1{
    position: relative;
    font-size: x-large;
    font-family: 'Times New Roman', Times, serif;
    top: 20px;
    left: 80px;
    text-decoration: none;
}
.card-1 img{
    position: relative;
    width: 225px;
    top: 30px;
    left: 25px;
}
.card-2{
    position: relative;
    height: 350px;
    width: 275px;
    background: rgb(255, 255, 255);
    border-radius: 15px;
    box-shadow: 1px 2px 15px 4px;
    Top: -225px;
    left: 625px;
}
.card-2 h1{
    position: relative;
    font-size: x-large;
    font-family: 'Times New Roman', Times, serif;
    top: 20px;
    left: 55px;
}
.card-2 img{
    position: relative;
    width: 225px;
    top: 40px;
    left: 25px;
}
.card-3{
    position: relative;
    height: 350px;
    width: 275px;
    background: rgb(255, 255, 255);
    border-radius: 15px;
    box-shadow: 1px 2px 15px 4px;
    Top: -575px;
    left: 975px;
}
.card-3 h1{
    position: relative;
    font-size: x-large;
    font-family: 'Times New Roman', Times, serif;
    top: 20px;
    left: 53px;
}
.card-3 img{
    position: relative;
    width: 225px;
    top: 50px;
    left: 25px;
}
</style>
<body>

    <div class="side-nav">
        <img src="images/title.png" class="title">
        <ul>
            <li><img src="images/home.png"><a href="home.php">HOME</a></li>
            <li><img src="images/products.png"><a href="products.php">PRODUCTS</a></li>
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
        <div class="card-1" >
            <a href="mobiles.php">
                <h1>
                MOBILES
                </h1>
                <img src="images/2.jpg" alt="">
            </a>
        </div>
        <div class="card-2">
            <a href="assoceries.php">
            <h1>
                ACCESSORIES
            </h1>
            <img src="images/3.jpeg" alt="">
            </a>
        </div>
        <div class="card-3">
            <a href="headset.php">
            <h1>
                HEAD PHONES
            </h1>
            <img src="images/4.jpeg" alt="">
            </a>
        </div>
    </div>
    
</body>
</html>