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