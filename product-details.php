<?php
 include('Config/Controller.class.php');
$obj_product  =  new Product();
$ProductID = $_GET['id'];
$ProductDetails = $obj_product->getProductDetails($ProductID);

$getAllProductPhotos = $obj_product->_getAllProductPhotos($ProductID);
$getPSizes = $obj_product->getAvailableSizeFrnd($ProductID);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href='http://fonts.googleapis.com/css?family=Cabin+Condensed' rel='stylesheet' type='text/css' />
<script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>

<script type="text/javascript">
$(document).ready(function(e) {
    $(".smallImage").click(function() {
		var ID = $(this).attr("simid");
		var total = <?=count($getAllProductPhotos)?>;
		for(var i=1;i<=total;i++) {
			if(i == ID) { 				
				$("#bigImage"+ID).fadeTo("slow",1);				
			} 
			else { 				
				$("#bigImage"+i).css("display","none"); 
			}			
		}
 
	});
	
	
	$(".button.blue").click(function() {
		var ID = $(this).attr("sid");		
 		var stotal = <?=count($getPSizes)?>;
		for(var i=1;i<=stotal;i++) {
			if(i == ID) { 				
				$("#spansize"+ID).removeClass('button blue');
				$("#spansize"+ID).addClass('button green');	
				$('.size_type').val(ID);	
			} 
			else { 				
				$("#spansize"+i).addClass('button blue');	
			}			
		}
	});
});

function orderNow(){
	var size  = $('.size_type').val();
	if(size ==''){
		alert('Please Select a Size');
		return false;
	}else{
		parent.window.location = "<?php echo SITEURL;?>order_details.php?product_id=<?php echo $ProductID; ?>&size="+size;
	}
	
	
	
}
</script>
</head>

<body>
<div style="width:900px; height:480px; border:0px solid red;">

	<div style="padding-top:2px; padding-left:2px; float:left;">
	<?php	
	
	$k=1;	
	foreach($getAllProductPhotos as $p) {
	?>
			<div class="smallImage" simid=<?=$k?> style="padding-top:1px; cursor:pointer;">
				<img src="images/products/thumbs/<?=$p['photo']?>"   />				
			</div>
	<?php $k++; } ?>	
			
			
			<div style="clear:both;"></div>
	</div>
    <?php
	$j=1;
    foreach($getAllProductPhotos as $p) {
	?>	
	<div id="bigImage<?=$j?>" style="width:360px;border:0px solid red; float:left;margin-left:5px; <?php if($j!=1) { ?> display:none;<?php } ?>">
			<img src="images/products/big/<?=str_replace("_R","",$p['photo'])?>" />
			<div style="clear:both;"></div>
	</div>
	<?php $j++; } ?>
	
	<div style="border:0px solid red; margin-left:441px;" align="center">
	
		<span style="font-family:'Cabin Condensed', serif; font-size:30px;color:#0099FF;"><?=$ProductDetails[0]['Title']?></span><br /><br />
		<span style="font-family:'Cabin Condensed', serif; font-size:25px; color:#903;">Rs . <?=$ProductDetails[0]['Price']?></span><br /><br />
		
		<p style="font-family:'Cabin Condensed', serif; font-size:15px; color:#000000; text-align:left;">
		<?=$ProductDetails[0]['Description']?>
		</p>
		
		<span style="font-family:'Cabin Condensed', serif; font-size:25px; color:#0099FF;">Available Sizes</span><br /><br />
		<?php		
		$size_array = array("S","M","L","XL","XXL");
		$m=1;
		foreach($getPSizes as $s) {
		?>
        
        <span id="spansize<?=$m?>" sid=<?=$m?> class='amit_class button blue'><?=$size_array[$s['sizeID']-1]?></span>&nbsp;
        <?php $m++; } ?>
		
		<br /><br /><br /><br /><br /><br />
		<input type="hidden"  class="size_type"  value="" />
		<div class="ordernow" onclick="orderNow()">ORDER NOW</div>
	
	</div>
	
	
	
	<!--<div id="showcase" class="showcase">
		
		<div class="showcase-slide">			
			<div class="showcase-content">
				<img src="images/products/big/adidas-brown-1.jpg" alt="01" />
			</div>			
			<div class="showcase-thumbnail">
				<img src="images/products/thumbs/adidas-brown-1_R.jpg"  />
				<div class="showcase-thumbnail-cover"></div>
			</div>			
			
		</div>
		
		<div class="showcase-slide">			
			<div class="showcase-content">
				<img src="images/products/big/adidas-brown-2.jpg" alt="01" />
			</div>			
			<div class="showcase-thumbnail">
				<img src="images/products/thumbs/adidas-brown-2_R.jpg"  />
				<div class="showcase-thumbnail-cover"></div>
			</div>			
			
		</div>
		
		
		
	</div>-->


</div>
</body>
<style type="text/css">
.button {
		padding: 5px 10px;
		display: inline;
		background: #777 url(images/button.png) repeat-x bottom;
		border: none;
		color: #fff;
		cursor: pointer;
		font-weight: bold;
		border-radius: 5px;
		-moz-border-radius: 5px;
		-webkit-border-radius: 5px;
		text-shadow: 1px 1px #666;
		font-family:'Cabin Condensed', serif;
		}
	.button:hover {
		background-position: 0 center;
		}
	.button:active {
		background-position: 0 top;
		position: relative;
		top: 1px;
		padding: 6px 10px 4px;
		}
	.button.red { background-color: #e50000; }
	.button.purple { background-color: #9400bf; }
	.button.green { background-color: #58aa00; }
	.button.orange { background-color: #ff9c00; }
	.button.blue { background-color: #2c6da0; }
	.button.black { background-color: #333; }
	.button.white { background-color: #fff; color: #000; text-shadow: 1px 1px #fff; }
	.button.small { font-size: 75%; padding: 3px 7px; }
	.button.small:active { padding: 4px 7px 2px; background-position: 0 top; }
	.button.large { font-size: 125%; padding: 7px 12px; }
	.button.large:active { padding: 8px 12px 6px; background-position: 0 top; }
	
	.ordernow {
	-moz-box-shadow:inset -3px 1px 10px -11px #caefab;
	-webkit-box-shadow:inset -3px 1px 10px -11px #caefab;
	box-shadow:inset -3px 1px 10px -11px #caefab;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #77d42a), color-stop(1, #5cb811) );
	background:-moz-linear-gradient( center top, #77d42a 5%, #5cb811 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#77d42a', endColorstr='#5cb811');
	background-color:#77d42a;
	-moz-border-radius:23px;
	-webkit-border-radius:23px;
	border-radius:23px;
	border:1px solid #268a16;
	display:inline-block;
	color:#306108;
	font-family:arial;
	font-size:28px;
	font-weight:bold;
	padding:10px 36px;
	text-decoration:none;
	text-shadow:0px 1px 0px #aade7c;
	cursor:pointer;
}.ordernow:hover {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #5cb811), color-stop(1, #77d42a) );
	background:-moz-linear-gradient( center top, #5cb811 5%, #77d42a 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#5cb811', endColorstr='#77d42a');
	background-color:#5cb811;
	cursor:pointer;
}.ordernow:active {
	position:relative;
	top:1px;
	cursor:pointer;
}
</style>
</html>