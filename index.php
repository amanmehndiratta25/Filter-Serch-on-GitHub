<?php

 include('Config/Controller.class.php');
 $Session_Name= SESSION_NAME;
 $obj_product  =  new Product();
?>
</html>
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH; ?>styles.css" />
    <script type="text/javascript" src="<?php echo JS_PATH; ?>jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH; ?>thickbox.js"></script>
    <link rel="stylesheet" href="<?php echo CSS_PATH; ?>thickbox.css" type="text/css" media="screen" />
    <script type="application/javascript" src="<?php echo JS_PATH; ?>productfilter.js"></script>
</head>
<body>
    <div class="mainDiv"><br />
        <h3 align="LEFT" style="font-size:28px;font-family: 'Cabin Condensed', sans-serif;">
            <a href="<?php echo SITEURL.'Cpanel/Login.php'; ?>" target="_blank" style=" color:#F09; background-color: gainsboro;">Cpanel</a></h3>
            <div class="divbox divbox1">
                <div style="display:none;" class="productCategoryLeftPanel"></div>
                <form name="frm_filter" id="frm_filter" method="post" action="">
                    <div class="productCategoryLeftPanel" id="productCategoryLeftPanel">
                                    <div class="pro_cat_title">
                                        <h1 style="cursor:pointer;"><a>Brands </a><span class="spanbrandcls" style="float:right; visibility:hidden;"><a href="javascript:;"><img src="images/reset.png" alt="reset" title="reset" /></a></span></h1>
                                    </div>
                                    <div id="branddivID"><?php include 'pageportion/brands.php';  ?></div>

                                    <div class="pro_cat_title">
                                        <h1 style="cursor:pointer;"><a>size</a><span class="spansizecls" style="float:right; visibility:hidden;"><a href="javascript:;"><img src="images/reset.png" alt="reset" title="reset" /></a></span></h1>
                                    </div>
                                     <?php include 'pageportion/sizes.php';  ?>

                                    <div class="pro_cat_title">
                                        <h1 style="cursor:pointer;"><a>Color</a><span class="spancolorcls" style="float:right; visibility:hidden;"><a href="javascript:;"><img src="images/reset.png" alt="reset" title="reset" /></a></span></h1>
                                    </div>
                                    <?php include 'pageportion/colors.php';  ?>

                                    <div class="pro_cat_title">
                                        <h1 style="cursor:pointer;"><a>Price</a><span class="spanpricecls" style="float:right; visibility:hidden;"><a href="javascript:;"><img src="images/reset.png" alt="reset" title="reset" /></a></span></h1>
                                    </div>
                                    <?php include 'pageportion/prices.php';  ?>
                    </div>
                </form>
            </div>
            <div class="container">
                <?php include 'pageportion/show-filters.php';  ?>   
                <?php include "products.php";  ?>
                <div style="clear:both;"></div>
            </div>
    </div>
</body>
</html>
  