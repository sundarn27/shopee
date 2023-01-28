<?php 

include 'db_con.php';


if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    $sql = "SELECT * FROM products WHERE id = '$id'";
    $productResult = mysqli_query($conn, $sql);

    $product = mysqli_fetch_assoc($productResult);

    print_r($product);
    

    $sql = "INSERT INTO orders(product_id) VALUES ('$id')";
    $result = mysqli_query($conn, $sql);    
    if(!$result){
        echo "<script>alert('Order Failed')</script>";
    }
    else{
        header("Location: http://localhost/shopee/order.php");
    }
}
?>