<?php
require_once("cms-admin/db/dba.php");
db_connect();
if(isset($_GET['page']) && $_GET['page'] != null) {
    $id = $_GET['id'];
    $query_result = query("SELECT * FROM `menus` where menu_id='".$id."' limit 1");
    $sub_row_result = mysql_fetch_array($query_result);
    $sub_page_data = $sub_row_result['content'];
    echo $sub_page_data;
    exit;
}
$result = query("SELECT * FROM `menus` where menu_id='PG-002' limit 1");
$row_result = mysql_fetch_array($result);
$page_data = $row_result['content'];
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="Metro UI CSS">
    <meta name="author" content="Sergey Pimenov">
    <meta name="keywords" content="windows 8, modern style, Metro UI, style, modern, css, framework">

    <link href="css/modern.css" rel="stylesheet">
    <link href="css/modern-responsive.css" rel="stylesheet">
    <link href="css/site.css" rel="stylesheet" type="text/css">
    <link href="js/google-code-prettify/prettify.css" rel="stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="js/assets/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="js/assets/jquery.mousewheel.min.js"></script>

    <script type="text/javascript" src="js/modern/tile-slider.js"></script>
    <script type="text/javascript" src="js/modern/tile-drag.js"></script>
    <script type="text/javascript" src="js/modern/dialog.js"></script>
    <script type="text/javascript" src="js/modern/dropdown.js"></script>
    <script type="text/javascript" src="js/jquery.blockUI.js"></script>

    <title>Services -- Creative Solution</title>
</head>
<!--<body style="background-color: #4ea5c4;" class="metrouicss" onload="prettyPrint()">-->
<body class="metrouicss" onload="prettyPrint()">
    <div class="wrapper">
        <div style="height: 470px;">
        <div class="tile triple-vertical double bg-color-blue" style="margin-right: 50px;">
            <div class="tile-content" style="cursor: default;">
                <h1 style="font-weight: bold;font-size: 20px;font-family: 'Open Sans', Verdana, Arial, Helvetica, sans-serif;">Services</h1>
                <div style="font-family: 'Open Sans', Verdana, Arial, Helvetica, sans-serif;font-size: 13px;width: 100%;text-align: justify;margin-top: 15px;">
                    <?php echo $page_data; ?>
                </div>
            </div>
        </div>
            <div class="tile">
                <div class="tile-content" id="advertising">
                    <h5>Advertising</h5>
                    <p>Newspaper</p>
                    <p>Magazine</p>
                    <p>Website</p>
                    <p>TVC/RDC</p>
                    <p>Outdoor</p>
                    <div class="brand">
                        <img class="icon" src="images/view-32.png">
                    </div>
                </div>
            </div>
            <div class="tile double bg-color-green">
                <div class="tile-content" id="graphics-design">
                    <img src="images/michael.jpg" class="place-right">
                    <h5>Graphics Design</h5>
                    <p>Brochure</p>
                    <p>Banner</p>
                    <p>Flyer</p>
                    <p>Promotional Item</p>
                    <div class="brand">
                        <img class="icon" src="images/Mail128.png">
                    </div>
                </div>
            </div>
            <div class="tile double bg-color-blue">
                <div class="tile-content" id="logo-design">
                    <img src="images/logo-cs.jpg" class="place-right">
                    <h5>Logo Design</h5>
                    <p>Logo Concept</p>
                    <p>Visualization</p>
                    <p>Development</p>
                    <p>Re-design</p>
                    <div class="brand">
                        <img class="icon" src="images/Camera48.png">
                    </div>
                </div>
            </div>
            <div class="tile bg-color-orange">
                <div class="tile-content" id="branding">
                    <h5>Branding</h5>
                    <p>Corporate</p>
                    <p>Product</p>
                    <p>Campaign</p>
                    <p>Re-branding</p>
                    <div class="brand">
                        <img class="icon" src="images/Camera48.png">
                    </div>
                </div>
            </div>
            <div class="tile bg-color-orangeDark">
                <div class="tile-content" id="printing">
                    <h5>Printing</h5>
                    <p>Publication</p>
                    <p>Paper</p>
                    <p>PVC/Media</p>
                    <p>ID Cards</p>
                    <p>Garments Accessories</p>
                </div>
            </div>
            <div class="tile double bg-color-redLight">
                <div class="tile-content" id="web-design">
                    <img src="images/logo-cs.jpg" class="place-right">
                    <h5>Web Design</h5>
                    <p>Website</p>
                    <p>Web application</p>
                    <p>Domain</p>
                    <p>Hosting</p>
                    <div class="brand">
                        <img class="icon" src="images/grid.png">
                    </div>
                </div>
            </div>
        </div>
        <div style="margin-top: 10px;">
            <?php include('menu.php'); ?>
        </div>
    </div>
<script src="js/app.js" type="text/javascript"></script>
</body>
</html>
