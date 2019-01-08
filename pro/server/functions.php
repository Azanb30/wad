<?php
require "db_connection.php";
//include "db_connection.php";
function getCats()
{
    global $con;
    $getCatQuery = "select * from categories";
    $getCatRes = mysqli_query($con,$getCatQuery);
    //$row = mysqli_fetch_assoc($getCatRes);
    //print_r($row);
    while ($row = mysqli_fetch_assoc($getCatRes))
    {
        $id = $row['cat_id'];
        $title = $row['cat_title'];
        echo "<li><a class='nav-link' href='#'>$title</a></li>";
    }
}
function getBrands()
{
    global $con;
    $getBrandQuery = "select * from brands";
    $getBrandRes = mysqli_query($con,$getBrandQuery);
    //$row = mysqli_fetch_assoc($getCatRes);
    //print_r($row);
    while ($row = mysqli_fetch_assoc($getBrandRes))
    {
        $id = $row['brand_id'];
        $name = $row['brand_title'];
        echo "<li><a class='nav-link' href='#'>$name</a></li>";
    }
}
function getPro(){
    global $con;
    $getProQuery = "select * from products order by RAND();";
    $getProResult = mysqli_query($con,$getProQuery);
    while($row = mysqli_fetch_assoc($getProResult)){
        $pro_id = $row['pro_id'];
        $pro_title = $row['pro_title'];
        $pro_price = $row['pro_price'];
        $pro_image = $row['pro_image'];
        echo "
                <div class='col-sm-6 col-md-4 col-lg-3 text-center product-summary'>
                    <h5 class='text-capitalize'>$pro_title</h5>
                    <img src='admin/product_images/$pro_image'>
                    <p> <b> Rs $pro_price/-  </b> </p>
                    <a href='detail.php' class='btn btn-info btn-sm'>Details</a>
                    <a href='#'>
                        <button class='btn btn-primary btn-sm'>
                            <i class='fas fa-cart-plus'></i> Add to Cart
                        </button>
                    </a>
                </div>
        ";
    }
}