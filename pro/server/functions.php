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
        $name = $row['brand_name'];
        echo "<li><a class='nav-link' href='#'>$name</a></li>";
    }
}
function getData()
{
    global $con;
    $getBrandQuery = "select * from products";
    $getBrandRes = mysqli_query($con,$getBrandQuery);
    while ($row = mysqli_fetch_assoc($getBrandRes))
    {
        $title = $row['pro_title'];
        $pro_cat = $row['pro_cat'];
        $pro_brand = $row['pro_brand'];
        $pro_price = $row['pro_price'];
        $pro_desc = $row['pro_desc'];
        $pro_keywords = $row['pro_keyword'];
        echo "<li>Title : <b>$title</b></li>";
        echo "<li>Category : <b>$pro_cat</b></li>";
        echo "<li>Brand : <b>$pro_brand </b></li>";
        echo "<li>Price : <b>$pro_price</b></li>";
        echo "<li>Description : <b>$pro_desc</b></li>";
        echo "<li>Keyword : <b>$pro_keywords</b></li>";
        echo "<br>";
    }
}