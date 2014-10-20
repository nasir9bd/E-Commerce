<?php
$objCatalogue = new Catalogue();
$cats = $objCatalogue->getCategories();

$objBusiness = new Business();
$business = $objBusiness->getBusiness();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Ecommerce website project</title>
    <meta name="description" content="Ecommerce website project" />
    <meta name="keywords" content="Ecommerce website project" />
    <meta http-equiv="imagetoolbar" content="no" />
    <link rel="stylesheet" href="css/core.css"/>
</head>
<body>
<div id="header">
    <div id="header_in">

        <h5><a href="/"><?php echo $business['name']; ?></a></h5>
    </div>
</div>
<div id="outer">
    <div id="wrapper">
        <div id="left">
            <h2>Categories</h2>
            <ul id="navigation">
                <?php
                if(!empty($cats)){
                    foreach($cats as $cat){
                        echo "<li><a href=\"/?page=catalogue&amp;category=" .$cat['id']."\"";
                        echo Helper::getActive(array('category'=>$cat['id']));
                        echo ">";
                        echo Helper::encodeHtml($cat['name']);
                        echo "</a></li>";
                    }
                }
                ?>
                <li><a href="#">link</a></li>
            </ul>
        </div>
        <div id="right">