<?php

include 'db_con.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mobiles.css" class="style">
    <title>Mobiles</title>
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

.card-2{
    position: relative;
    height: 300px;
    width: 900px;
    background: rgb(255, 255, 255);
    border-radius: 15px;
    box-shadow: 1px 2px 15px 4px;
    Top: 100px;
    left: 275px;
    text-decoration: none;
    margin: 50px;
}
.card-2 img{
    width: 200px;
    position: relative;
    left: 65px;
    top: -15px;
}
.head-2{
    position: relative;
    align-items: center;
    top: -225px;
    left: 300px;
}
.btn-1{
    position: relative;
    outline: none;
    width: 150px;
    height: 30px;
    border-radius: 10px;
    /* box-shadow: 0px 0px 1px 2px; */
    background-color: rgb(228, 188, 13);
    font-size: larger;
    font-family: 'Times New Roman', Times, serif;
    font-weight: 600;
    /* border: none; */
    top: 20px;
    left: -5px;
}
.btn-1:hover{
    color: #fff;
    background-color: rgb(7, 164, 7);
}
.details-1{
    position: relative;
    width: 250px;
    height: 250px;
    background-color: rgb(255, 255, 255);
    border-radius: 15px;
    box-shadow: 1px 2px 15px 4px;
    top: -15px;
    left: 1050px;
    align-items: center;
}
.details-1 .select{
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
h4{
    position: relative;
    font-family: 'Times New Roman', Times, serif;
    font-weight: 600;
}
.btn-2{
    position: relative;
    outline: black;
    width: 1;
    height: 30px;
    border-radius: 10px;
    /* box-shadow: 0px 0px 1px 2px; */
    box-shadow: 0px 1px 1px 2px black;
    background-color: rgb(245, 15, 15);
    font-size: larger;
    font-family: 'Times New Roman', Times, serif;
    font-weight: 600;
    /* border: none; */
    top: 20px;
    left: -5px;
    text-decoration: none;
    padding: 3px 25px;
    color: black;
}
.btn-2:hover{
    color: #fff;
    background-color: rgb(7, 164, 7);
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
            <a href="products.php">BACK</a>
        </button>
    <?php

    $sql = "SELECT * FROM headset";

    $result = mysqli_query($conn,$sql);

    $count = mysqli_num_rows($result);

    if($count>0)
    {
        while($row=mysqli_fetch_assoc($result)){

            $id = $row['id'];
            $name = $row['name'];
            $price = $row['price'];
            $img = $row['img'];

        ?>
            <div class="card-2">
          
                <br>

                <br><br>
                <img src="images/<?php echo $img; ?>">
            <div class="head-2">
                <h5>Sponsered</h5>
                <h1><?php echo $name; ?></h1>
                <h2><?php echo $price; ?></h2><h4>(6% Offer)</h4>
                <h4>FREE Delivery</h4>
                <br>

                <br>
                <button class="btn-1">ADD TO CART</button>&ensp;&ensp;&ensp;&ensp;<a href="card.php?id=<?php echo $row['id'];?>"class="btn-2">BUY NOW</a>
            </div>    
            </div>
            <!-- <div class="details-1">
                <br>
                &ensp;<h4>QUANTITY</h4><br>
                &ensp;&ensp;&ensp;<input type="number" value="Quantity" required=""><br>
                &ensp;<h4>COLOR</h4><br>
                &ensp;&ensp;&ensp;&ensp;<select>
                                        <option>BLUE</option>
                                        <option>GREEN</option>
                                        <option>RED</option>
                                        </select>
                <br>
                
                &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<button class="btn-2">BUY NOW</button>
            </div> -->
            <?php
        }
    }
    else
        {
        //Food not Available
            echo "<div class='error'>Food not found.</div>";
        }
    ?>






       
</body>
</html>