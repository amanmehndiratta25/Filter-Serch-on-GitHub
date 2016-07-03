<div class="different_filters_divbox">                                            
	<ul class="different_filters">
		<?php		
		$sizearray =   $obj_product->getResults('tbl_sizes');		
		foreach($sizearray as $size) {
			$sizee = $size['size'];		
		?>		
		<li>
			<input type="checkbox" id="size-<?=strtolower($sizee);?>" name="scheck" class="scheck" value="<?=$size['id']?>"/>
			<label for="size-<?=strtolower($sizee);?>"><?=$sizee?></label>
		</li>
		
		<?php
		}
		?>
	</ul>
</div>