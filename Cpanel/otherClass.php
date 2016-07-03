
<?php
include 'Connection.php';
class otherClass extends Connection{

      public function getBookInfo()	{
		  
			return array(
					
						"Description"=>       $this->	Description,
						"Brand"=>             $this->Brand,
						"Size"=>              $this->Size,
						"Name"=>              $this->Name, 
						"Color"=>             $this->Color,
						"Price"=>             $this->Price, 
						"site_Country"=>      $this->site_Country, 
						"Site_Owner_Name"=>   $this->Site_Owner_Name,
						"Company_Name"=>      $this->Company_Name, 
						"Company_Address"=>   $this->Company_Address,
						"Company_Website"=>   $this->Company_Website, 
						"Company_Phone"=>     $this->Company_Phone
						);
      }
	
	public function setBookInfo($site_Country,$Site_Owner_Name,$Company_Name,$Company_Address,$Company_Website,$Company_Phone){
       					
	                     $this->site_Country   =$site_Country;
    					 $this->Site_Owner_Name=$Site_Owner_Name;
    					 $this->Company_Name   =$Company_Name;
    					 $this->Company_Address=$Company_Address;
            			 $this->Company_Website=$Company_Website;
    					 $this->Company_Phone  =$Company_Phone;
        					         
      }
	  
      public function setDB(){            		
                        
                        echo $Count_row=$this->getDB_Check('tbl_products');
                		if($Count_row==0){
                		        $sql="insert into tbl_products(Title, Description, Brand, Color, Price, site_Country, Site_Owner_Name, Company_Name, Company_Address, Company_Website, Company_Phone )VALUES (		
    					   	
    							     '$this->Name', '$this->Description','$this->Brand', '$this->Color','$this->Price','$this->site_Country','$this->Site_Owner_Name', '$this->Company_Name','$this->Company_Address','$this->Company_Website','$this->Company_Phone') ";
    							            	
                        $sql_result = $this->admin_obj->saveProductsInfo($sql);
    				    echo   "<div align='center' class='alert alert-success'>
    						    <h4 class='alert-title'>Success Message </h4>
    						    <p>Data Inserted Successfully <a href='#' title='Link'>Link</a></p>
    				    	   </div>";
    			        return $sql_result;
               			}else{
                		  return false;
                		}
    }
	  
	public function getDB($tbl_products){
	    
         $sql ="select * from $tbl_products";
         $rs  = $this->admin_obj->getProduct($sql);
         return $rs;

 	}
 	
 	public function getDB_Check($tbl_name){
 	    
 	    $sqlCheck="select * from $tbl_name where Title='$this->Name' ";
 	    $rs  = $this->admin_obj->row_checkExe($sqlCheck);
 	    return $rs;
 	
 	}
 	
 	public function getProduct_Info($tbl_brands){
 	    
 	    $sql ="select * from $tbl_brands";
 	    $rs  = $this->admin_obj->getProduct_Info_Execution($sql);
 	    return $rs;
 	}   
}

// Other Class Closed


if(isset($_REQUEST['SAVE_DATA'])){
    
		$Description  	=	$_POST	['Description']        ;    	
		$Brand		    =	$_POST	['Brand']              ;    
		$Size		    =	$_POST	['sizes']              ;    
		$Name		    =	$_POST	['Name']               ;    
		$Price		    =	$_POST	['Price']              ;
		$Color		    =	$_POST	['Color']              ;    	
		$site_Country	=	$_POST	['site_Country']       ;    
		$Site_Owner_Name=	$_POST	['Site_Owner_Name']    ;    
	 	$Company_Name	=	$_POST	['Company_Name']       ;  
	    $Company_Address=	$_POST	['Company_Address']    ;    
		$Company_Website=	$_POST	['Company_Website']    ;    
		$Company_Phone	=	$_POST	['Company_Phone']      ;    
			
		$myObjSAVE = new otherClass($Description, $Brand, $Size, $Name, $Price, $Color, $site_Country, $Site_Owner_Name, $Company_Name, $Company_Address, $Company_Website, $Company_Phone);                        
                  
		$Check_table=$myObjSAVE->setDB();
	    if($Check_table){	
	    }else{
		echo  "<div align='center' class='alert alert-warning'>
					<h4 class='alert-title'>Alert Message </h4>
					<p>Data Already Exists <a href='index.php' onClick='goBack()'>Go Back</a></p>
				</div>";				
	    }
}
// Close SAVE_DATA Request

if(isset($_REQUEST['Name'],$_REQUEST['Description'])){
        
	    $Description=$_POST['Description']   ;
		$Brand		=$_POST['Brand']         ;
		$Size		=$_POST['sizes']         ;
		$Name		=$_POST['Name']          ;
		$Price		=$_POST['Price']         ; 
		$Color		=$_POST['Color']         ;
		
		
		$img_name  = isset($_FILES['Photos']['name'])?$_FILES['Photos']['name']:'';
		$tmp_name  = isset($_FILES['Photos']['tmp_name'])?$_FILES['Photos']['tmp_name']:'';
		$img_path  = 'images/';
		
	    move_uploaded_file($tmp_name, $img_path.$img_name);
		$myObj 		= new otherClass($Description,$Brand,$Size,$Name,$Price,$Color);
	    echo '<br>';
		$myObj-> setBookInfo(
						"India"                   ,
						"Amit Ghosh"              ,
						"Help Web Tech Pvt Ltd"   , 
						"Saket, New Delhi-110030" ,
						"www.helpwebtech.com"     ,
						"8527672265" 
						);
		$Pro_Info=$myObj->getBookInfo();
   
    echo '
    <div id="" class="content" >
    <div id="register" style="width: 800px; min-height: 325px;  margin-left: 25% ;background-image: url(assets/images/bg.jpg)">' .
       '<h1>Confirm Product  Details</h1><hr><br>'.'
        <form  action=""  method="post" autocomplete="on">
            <table cellpadding="5" cellspacing="5" border="0" align="center">
                <tr>
                    <td>Name</td>
                    <td><input  name="Name" required="required" type="text" value="'.$Pro_Info['Name'].'" readonly /></td>
                    <td><label  > Description</label></td>
                    <td><input  name="Description" required="required" type="text" value="'.$Pro_Info['Description'].'" readonly/></td>
                </tr>
                <tr>
                    <td><label >Brand </label></td>
                    <td><input  name="Brand" required="required" type="text" value="'.$Pro_Info['Brand'].'" readonly/></td>
                    <td>Size</td>
                    <td><input  name="Size" required="required" type="text" value="'.$Pro_Info['Size'].'" readonly /></td>
                </tr>
                <tr>
                    <td><label > Color</label></td>
                    <td><input  name="Color" required="required" type="text" value="'.$Pro_Info['Color'].'" readonly/></td>
                    <td><label >Price </label></td>
                    <td><input  name="Price" required="required" type="text" value="'.$Pro_Info['Price'].'" readonly/></td>
                </tr>
                <tr>
                    <td>Country</td>
                    <td><input  name="site_Country" required="required" type="text" value="'.$Pro_Info['site_Country'].'" readonly /></td>
                    <td><label > Owner Name</label></td>
                    <td><input  name="Site_Owner_Name" required="required" type="text" value="'.$Pro_Info['Site_Owner_Name'].'" readonly/></td>
                </tr>
                <tr>
                    <td><label  >Company Name </label></td>
                    <td><input  name="Company_Name" required="required" type="text" value="'.$Pro_Info['Company_Name'].'" readonly/></td>
                    <td>Company Address</td>
                    <td><input  name="Company_Address" required="required" type="text" value="'.$Pro_Info['Company_Address'].'" readonly /></td>
                </tr>
                <tr>
                    <td><label > Company Website</label></td>
                    <td><input  name="Company_Website" required="required" type="text" value="'.$Pro_Info['Company_Website'].'" readonly/></td>
                    <td><label >Company Phone </label></td>
                    <td><input  name="Company_Phone" required="required" type="text" value="'.$Pro_Info['Company_Phone'].'" readonly/></td>
                </tr>
                <tr>
                    <td align="right">
                        <input id="" style="color:#60F !important; font-size:18px; font-weight:900; width:100%;" type="submit" name="SAVE_DATA" value="Enter Here"/></td>
                </tr>
            </table>
        </form>
    </div>
    </div>
    ';

}
?>