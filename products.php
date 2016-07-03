<div id="loaderID" style="position:absolute; top:60%; left:53%; z-index:2; opacity:0"><img src="<?php echo IMG_PATH;?>images/ajax-loader.gif" /></div>
<div id="productContainer"><?php

$products = $obj_product->allProducts();
    if(count($products)>0) {
	    foreach($products as $pro) {

		    $productPhoto = $obj_product->getproductPhoto($pro['ProductID']);
            $productPhoto  =  isset($productPhoto[0]['photo'])?$productPhoto[0]['photo']:'';

		?>
		<div class="divbox" onclick="tb_show('<?=$pro['Title']?>','product-details.php?id=<?=$pro['ProductID']?>&keepThis=true&TB_iframe=true&height=550&width=900','thickbox');">
		    <div style="width: 200px;height: 202px;background:url(images/products/medium/<?=str_replace("_R","",$productPhoto)?>) no-repeat;" alt="<?=$pro['Title']?>">
			<div class="image-hover"></div>
		    </div>
		    <div class="product_name" align="center">
			    <a href="#"><span class="productname"><?=$pro['Title']?></span></a>
			    <div class="price">
				    <span class="product_price"><a href="#">Rs. <?=$pro['Price']?></a></span>                            
			    </div>
		    </div>
		</div><?php
	    }
    }
?>
</div>