<?php 
    session_start();
    require_once('server.php');
    $errors = array();

    
    $name = $_SESSION['username'];  
    
    $search =  mysqli_real_escape_string($_REQUEST['search']);
    $sql = "SELECT product.ItemID, product.pName, product.Price, 
    product.category
    FROM product
    WHERE pName LIKE '%".$search."%'";
    $r_query = mysql_query($sql);

    while ($row = mysql_fetch_array($r_query)){  
        echo "success";
    }
    
?>