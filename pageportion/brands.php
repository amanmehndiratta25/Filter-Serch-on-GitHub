<div class="different_filters_divbox">                                           
	<ul class="different_filters">
		<?php		
		$brandarray = $obj_product->getResults('tbl_brands');		
		foreach($brandarray as $brand) {
			$brandname = $brand['brand'];		
		?>		
		<li>
			<input type="checkbox" id="brand-<?=strtolower($brandname);?>" name="bcheck" class="bcheck" value="<?=$brand['id']?>" checkboxname="<?=$brandname?>" />
			<label for="brand-<?=strtolower($brandname);?>"><?=$brandname?></label>
		</li>
		
		<?php
		}
		?>
		
	</ul>
</div>