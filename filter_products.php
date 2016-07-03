<?php
include('Config/Controller.class.php');
$obj_product  =  new Product();


$bcheck = $_REQUEST['bcheck'];
$scheck = $_REQUEST['scheck'];
$ccheck = $_REQUEST['ccheck'];
$price_range = $_REQUEST['price_range'];

$obj_product->myFilterQuery($bcheck,$scheck,$ccheck,$price_range);




$WHERE = array(); $inner = $w = '';

if(!empty($price_range)) {
	$data3 = explode('-',$price_range);
	$WHERE[] = "(t1.Price between $data3[0] and $data3[1])";
}

if(!empty($bcheck)) {		
	if(strstr($bcheck,',')) {
		$data1 = explode(',',$bcheck);
		$barray = array();
		foreach($data1 as $c) {
			$barray[] = "t1.Brand = $c";
		}
		$WHERE[] = '('.implode(' OR ',$barray).')';
	} else {
		$WHERE[] = '(t1.Brand = '.$bcheck.')';
	}
}

if(!empty($ccheck)) {
	if(strstr($ccheck,',')) {
		$data2 = explode(',',$ccheck);
		$carray = array();
		foreach($data2 as $c) {
			$carray[] = "t1.Color = $c";
		}
		$WHERE[] = '('.implode(' OR ',$carray).')';
	} else {
		$WHERE[] = '(t1.Color = '.$ccheck.')';
	}
}

if(!empty($scheck)) {
	if(strstr($scheck,',')) {
		$data3 = explode(',',$scheck);
		$sarray = array();
		foreach($data3 as $c) {
			$sarray[] = "t2.sizeID = $c";
		}
		$WHERE[] = '('.implode(' OR ',$sarray).')';
	} else {
		$WHERE[] = '(t2.sizeID = '.$scheck.')';
	}
	
	$inner = 'INNER JOIN tbl_productsizes AS t2 ON t1.ProductID = t2.ProductID';
}
	$w = implode(' AND ',$WHERE);
	if(!empty($w)) $w = 'WHERE '.$w;
	
	
	
	//echo "SELECT DISTINCT  t1 . * FROM  `tbl_products` AS t1 $inner $w";
	$query = mysql_query("SELECT DISTINCT  t1 . * FROM  `tbl_products` AS t1 $inner $w");
	if(mysql_num_rows($query)>0) {
		while($pro = mysql_fetch_assoc($query)) {
			$productPhoto = $obj_product->getproductPhoto($pro['ProductID']);
			$productPhoto  =  isset($productPhoto[0]['photo'])?$productPhoto[0]['photo']:'';
				
		?>
		
		<!------------------------------------------------------------------------------------------------------------------------------------------------->	
			<div class="divbox" onclick="tb_show('<?=$pro['Title']?>','product-details.php?id=<?=$pro['ProductID']?>&keepThis=true&TB_iframe=true&height=500&width=900','thickbox');">
			
			
				<div style="width: 202px;height: 186px;background:url(images/products/medium/<?=str_replace("_R","",$productPhoto)?>) no-repeat;" alt="<?=$pro['Title']?>">
					<div class="image-hover"></div>
				</div>
	
				
				<div class="product_name" align="center">
					<a href="#"><span class="productname"><?=$pro['Title']?></span></a>
					<div class="price">
						<span class="product_price"><a href="#">Rs. <?=$pro['Price']?></a></span>                            
					</div>
					
				</div>
			</div>
		
		<!------------------------------------------------------------------------------------------------------------------------------------------------->
		
			
		<?php
		}
	} else {
		?>
        <div align="center"><h2 style="font-family:'Arial Black', Gadget, sans-serif;font-size:30px;color:#0099FF;">No Results with this filter</h2></div>
        <?php	
	}
?>