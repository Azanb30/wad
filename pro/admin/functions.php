<?php
require "server/db_connection.php";
if(isset($_POST['insert_pro']))
{
    $pro_title = $_POST['pro_title'];
    $pro_cat = $_POST['pro_cat'];
    $pro_brand = $_POST['pro_brand'];
    $pro_price = $_POST['pro_price'];
    $pro_desc = $_POST['pro_desc'];
    $pro_keywords = $_POST['pro_kw'];

    $pro_image = $_FILES['pro_image']['name'];
    $pro_image_tmp = $_FILES['pro_image']['tmp_name'];
    move_uploaded_file($pro_image_tmp,"product_images/$pro_image");

    $insertQuery = "insert into products(pro_title,pro_cat,pro_brand,pro_price,pro_desc,pro_image,pro_keywords)
    values('$pro_title','$pro_cat','$pro_brand','$pro_price','$pro_desc','$pro_image','$pro_keywords');";
    $res = mysqli_query($con,$insertQuery);
    if(!$res)
    {
        echo "Not Executed";
    }
}
function getcats()
{
    global $con;
    $getCatQuery = "select * from categories";
    $getCatRes = mysqli_query($con,$getCatQuery);
    while ($row = mysqli_fetch_assoc($getCatRes))
    {
        $id = $row['cat_id'];
        $title = $row['cat_title'];
        echo "<option value='$id'>$title</option>";
    }
}
function getbrands()
{
    global $con;
    $getBrandQuery = "select * from brands";
    $getBrandRes = mysqli_query($con,$getBrandQuery);
    while ($row = mysqli_fetch_assoc($getBrandRes))
    {
        $id = $row['brand_id'];
        $name = $row['brand_title'];
        echo "<option value='$id'>$name</option>";
    }
}