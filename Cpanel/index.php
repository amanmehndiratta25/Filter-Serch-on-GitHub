 <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Ruluko' rel='stylesheet' type='text/css' />
<?php 
    
    include 'otherClass.php'; 
    $conGet = new otherClass( $Description,$Brand,$Size,$Name,$Price,$Color,$site_Country, $Site_Owner_Name, $Company_Name, $Company_Address, $Company_Website, $Company_Phone );
    Class IndexCheck{
         
        public function __construct() {
           // print_r($_SESSION); 
            
            if(!$_SESSION['userActive']=='active'){
                header('Location:login.php');
            } 
            // For Session Destroy
            if (isset($_GET['logoutFunc'])&& $_GET['logoutFunc']==='myFunction'){
                $user=new User();
                $msgg=$user->logout();
                header("location:Login.php?msgg=$msgg");
            }
        }
  // Close Class IndexCheck      
    }
     
    $indexobj = new IndexCheck();
?>

<div id="HideFormOne" class="content">
    <h3 align="LEFT" style="font-size:28px;font-family: 'Cabin Condensed', sans-serif; float:left;">
        <a href="<?php echo SITEURL; ?>" target="_blank" style=" color:#F09; background-color: gainsboro;">Visit Site</a></h3>
        
        <h3 align="RIGHT" style="font-size:28px;font-family: 'Cabin Condensed', sans-serif;">
        <a href="<?php echo SITEURL.'Cpanel/index.php'; ?>?logoutFunc=myFunction"  style=" color:#F09; background-color: gainsboro;">LogOut</a></h3>
        
    <div id="register" style="width: 800px;  margin-left: 25%; background-image: url(assets/images/bg.jpg)">
        <h1>Enter  Product  </h1><hr><br>
        <form  action=""  method="post" autocomplete="on" enctype="multipart/form-data">
            <table  class="table table-striped table-bordered  table-hover "  style="width: 100%;" align="center">
                <tr>
                    <td><label > Name</label></td>
                    <td><input  name="Name" required type="text" placeholder="Name"/></td>
                </tr>
                <tr>
                    <td><label >Description </label></td>
                    <td><textarea name="Description" required rows="3" cols="22" maxlength="100"  placeholder="Description >100 Characters Max "><?php echo " "; ?></textarea></td>
                </tr>

                <tr>
                    <td><label > Brand</label></td>
                    <td>
                        <select name="Brand" style="width: 200px;">
                        <?php		
                    		$brandarray = $conGet->getProduct_Info('tbl_brands');		
                        		foreach($brandarray as $brand) {
                        			$brandname = $brand['brand'];		
                        		?>	
                                <option value="<?=$brand['id']?>"><?=$brandname?></option>	
                        				
                        		<?php
                        		}
                    	?>
                        </select>
                    </td>

                </tr>
                <tr>
                    <td><label>Size </label></td>
                    <td>
                        <?php		
                		$sizearray = $conGet->getProduct_Info('tbl_sizes');		
                    		foreach($sizearray as $size) {
                    			$psize = $size['size']; ?>                		
                    			<input type="checkbox" id="size-<?=strtolower($psize);?>" name="sizes[]" value="<?=$size['id']?>"/>
                    			<label for="size-<?=strtolower($psize);?>"><?=$psize?></label>
                    		<?php
                    		}
                		?>
                    </td>
                </tr>
                <tr>
                    <td><label >Color </label></td>
                    <td>
                        <select name="Color" style="width: 200px;">
                        <?php		
                    		$colorarray = $conGet->getProduct_Info('tbl_colors');		
                        		foreach($colorarray as $color) {
                        			$pcolor = $color['color'];		
                        		?>		
                        		<option value="<?=$color['id']?>"><?=$pcolor?></option>	
                        		
                        		<?php
                        		}
                    		?>
                    	</select>
                    </td>
                </tr>
                <tr>
                    <td><label >Price </label></td>
                    <td><input name="Price" required type="text" placeholder="Price"/></td>
                </tr>
                <tr>
                    <td><label >Photos </label></td>
                    <td><input  name="Photos" required type="file" placeholder="Photos"/></td>
                </tr>
                <tr>
                    <td align="right">
                        <input id="HideForm" style="color:#60F !important; font-size:18px; font-weight:900; width:100%;" type="submit" name="reg_active" value="Enter Here"/></td>
                </tr></table></form></div></div>
<div class="content">
    <div id="register" style="width: 100%;  margin-left: 0%    ; background-image: url(assets/images/bg.jpg)">
        <h1>Complete   Product  Details</h1><br>
        <script type="text/javascript" src="assets-minified/js-core.js"></script>        
<div id="page-content-wrapper"><div id="page-content"><div class="panel"><div class="panel-body"><div class="example-box-wrapper">
<div class="dataTables_wrapper form-inline" id="datatable-responsive_wrapper">   
    <table style="width: 100%;" aria-describedby="datatable-responsive_info" role="grid" id="datatable-responsive" class="table table-striped table-bordered responsive no-wrap dataTable dtr-inline"  width="100%">
<thead>
    <tr role="row"><th aria-sort="ascending" aria-label="Name: activate to sort column ascending" style="width:100px;" colspan="1" rowspan="1" aria-controls="datatable-responsive" tabindex="0" class="sorting_asc">Name</th><th aria-label="Position: activate to sort column ascending" style="width: 50px;" colspan="1" rowspan="1" aria-controls="datatable-responsive" tabindex="0" class="sorting">Brand</th><th aria-label="Office: activate to sort column ascending" style="width: 50px;" colspan="1" rowspan="1" aria-controls="datatable-responsive" tabindex="0" class="sorting">Size</th><th aria-label="Age: activate to sort column ascending" style="width: 150px;" colspan="1" rowspan="1" aria-controls="datatable-responsive" tabindex="0" class="sorting">Description</th><th aria-label="Start date: activate to sort column ascending" style="width: 50px;" colspan="1" rowspan="1" aria-controls="datatable-responsive" tabindex="0" class="sorting">Color</th><th aria-label="Salary: activate to sort column ascending" style="width: 50px;" colspan="1" rowspan="1" aria-controls="datatable-responsive" tabindex="0" class="sorting">Price</th><th aria-label="Salary: activate to sort column ascending" style="width: 50px;" colspan="1" rowspan="1" aria-controls="datatable-responsive" tabindex="0" class="sorting">Photo</th><th aria-label="Salary: activate to sort column ascending" style="width: 40px;" colspan="1" rowspan="1" aria-controls="datatable-responsive" tabindex="0" class="sorting">Action</th>
    </tr>
</thead><tfoot>
        <tr role="row"><th aria-sort="ascending" aria-label="Name: activate to sort column ascending" style="width:100px;" colspan="1" rowspan="1" aria-controls="datatable-responsive" tabindex="0" class="sorting_asc">Name</th><th aria-label="Position: activate to sort column ascending" style="width: 50px;" colspan="1" rowspan="1" aria-controls="datatable-responsive" tabindex="0" class="sorting">Brand</th><th aria-label="Office: activate to sort column ascending" style="width: 50px;" colspan="1" rowspan="1" aria-controls="datatable-responsive" tabindex="0" class="sorting">Size</th><th aria-label="Age: activate to sort column ascending" style="width: 150px;" colspan="1" rowspan="1" aria-controls="datatable-responsive" tabindex="0" class="sorting">Description</th><th aria-label="Start date: activate to sort column ascending" style="width: 50px;" colspan="1" rowspan="1" aria-controls="datatable-responsive" tabindex="0" class="sorting">Color</th><th aria-label="Salary: activate to sort column ascending" style="width: 50px;" colspan="1" rowspan="1" aria-controls="datatable-responsive" tabindex="0" class="sorting">Price</th><th aria-label="Salary: activate to sort column ascending" style="width: 50px;" colspan="1" rowspan="1" aria-controls="datatable-responsive" tabindex="0" class="sorting">Photo</th><th aria-label="Salary: activate to sort column ascending" style="width: 40px;" colspan="1" rowspan="1" aria-controls="datatable-responsive" tabindex="0" class="sorting">Action</th>
        </tr>
</tfoot>


<?php
        
		
		$reultSet=$conGet->getDB('tbl_products');
		
		foreach($reultSet as $key=>$valueGet) {  ?>
                  <tbody>
                      <tr class="even" role="row">
                          <td class="sorting_1"><?php  echo $valueGet->Title; ?></td>
                          <td><?php  echo $valueGet->   Brand       ; ?></td>
                          <td><?php  echo $valueGet->   Price       ; ?></td>
                          <td><?php  echo $valueGet->   Description ; ?></td>
                          <td><?php  echo $valueGet->   Color       ; ?></td>
                          <td><?php  echo $valueGet->   Price       ; ?></td>
                          <td><?php  echo $valueGet->   Price       ; ?></td>
                          <td><button name="" onclick="" value="<?php  echo "Edit"; ?>"></button>
                          	<button name="" onclick="" value="<?php  echo "Delete"; ?>"></button>
                          </td>
                      </tr>
                  </tbody><?php
		 } 


?>
</table></div></div></div></div></div></div></div></div>
<script type="text/javascript" src="assets-minified/admin-all-demo.js"></script>
 <link rel="stylesheet" type="text/css" href="assets-minified/admin-all-demo.css">
 <script type="text/javascript" src="assets/widgets/datatable/datatable.js"></script>
<script type="text/javascript" src="assets/widgets/datatable/datatable-bootstrap.js"></script>
<script type="text/javascript" src="assets/widgets/datatable/datatable-responsive.js"></script>
<script type="text/javascript" src="assets/widgets/datatable/datatable.js"></script>
<script type="text/javascript" src="assets/apna.js"></script>
<script src="assets/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP CORE SCRIPT   -->
    <script src="assets/plugins/bootstrap.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>