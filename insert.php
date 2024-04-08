<?php

include('dbconnect.php');
if(isset ($_POST ['upload'])){  
    $product_cat = $_POST['product_cat'];
    $product_brand = $_POST['product_brand'];
    $product_title = $_POST['product_title'];
    $product_price = $_POST['product_price'];
    $product_desc = $_POST['product_desc'];
    $product_keywords = $_POST['product_keywords'];
    $image =$_FILES['product_image']; 
    $image_location = $_FILES['product_image']['tmp_name'];
    $image_name=$_FILES['product_image']['name']; 
    $image_up=$image_name;
    $insert="INSERT INTO products (product_cat , product_brand , product_image, product_title, product_price, product_desc, product_keywords) VALUES('$product_cat ' , ' $product_brand ' , '$image_up',  '$product_title','$product_price', '$product_desc', '$product_keywords')";
    mysqli_query($conn, $insert) ;
    if(move_uploaded_file( $image_location , 'assets/prod_images/'. $image_name)){
        echo "<script>alert('Product Added Successfully!')</script>";
    }else{
        echo "<script>alert('Product  no Added Successfully!')</script>";
    }
    header('location: inde.php');
    

}

?>