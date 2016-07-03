<div class="different_filters_divbox">                                            
	<ul class="different_filters color-filter">
		<?php		
		$colorarray = $obj_product->getResults('tbl_colors');		
		foreach($colorarray as $color) {
			$colorr = $color['color'];		
		?>		
		<li>
			<input type="checkbox" id="color-<?=strtolower($colorr);?>" name="ccheck" class="ccheck" value="<?=$color['id']?>"/>
			<label for="color-<?=strtolower($colorr);?>"><?=$colorr?></label>
		</li>
		
		<?php
		}
		?>
	</ul>
</div>