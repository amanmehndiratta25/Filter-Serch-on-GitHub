<?php
include('Model.class.php');
//  Parent Class Controller
class Controller {
    var $DB= '' ;
	public function __construct(){
		
	    $this->DB =  new Model();
	}
}

// Class Product  extends Controller
class Product  extends Controller{
	
		public function __construct(){
			
		     parent::__construct();
		}
    
		public function getResults($table){
			
			 $sql  = "SELECT * FROM $table";
			 $this->DB->exeQuery($sql);
			 $rs = $this->DB->getvalueAssoc();			 
			 return $rs;
		} 
		   
 		// For Fetch all Products data form table
		public function allProducts(){ 
		          
			 $sql ="SELECT * FROM tbl_products";
			 $this->DB->exeQuery($sql);
			 $rs = $this->DB->getvalueAssoc();
			 return $rs;
		}
		
		// For Fetch All Product Single Cover Image by using product ID
		public function getproductPhoto($id){
			
		  	  $sql  =  "SELECT photo FROM tbl_productphotos where ProductID = $id limit 0,1";
			  $this->DB->exeQuery($sql);
			  $rs = $this->DB->getvalueAssoc();
			  return $rs;
		}
		
		// For Fetch All Product Details by using product ID
		public function getProductDetails($id){
			
			  $sql = "SELECT * FROM tbl_products where ProductID = $id";
			  $this->DB->exeQuery($sql);
			  $rs = $this->DB->getvalueAssoc();
			  return $rs;	
		}
		
		// For Fetch All Product Photos by using product ID
		public function _getAllProductPhotos($id){
			
			$sql =  "SELECT photo FROM tbl_productphotos where ProductID = $id limit 0,5";
			$this->DB->exeQuery($sql);
			$rs = $this->DB->getvalueAssoc();
			return $rs;			
		}
		
  		// For Fetch All Product getAvailableSize by using product ID
		private function getAvailableSize($id){
			
			$sql = "SELECT sizeID from tbl_productsizes where ProductID = $id";
			$this->DB->exeQuery($sql);
			$rs = $this->DB->getvalueAssoc();
			return $rs;
		}
		
		// For Fetch All Product getAvailableSizeFrnd by using product ID
	    	public function getAvailableSizeFrnd($id){
			
			$rs = $this->getAvailableSize($id);
			return $rs;
		}
		
		// For Fetch All Product myFilterQuery by using arguments
		public function myFilterQuery($bcheck,$scheck,$ccheck,$price_range){
			
			$WHERE = array(); $inner = $w = '';
			// if not empty price_range
			if(!empty($price_range)) {
				$data3 = explode('-',$price_range);
				$WHERE[] = "(t1.Price between $data3[0] and $data3[1])";
			}
			// if not empty Brand 
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
			// if not empty Color
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
			// if not empty Size
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
				// using Mysql  Join for Prodct Filter
				 $inner = 'INNER JOIN tbl_productsizes AS t2 ON t1.ProductID = t2.ProductID';
			}
			
			$w = implode(' AND ',$WHERE);
			if(!empty($w)) { $w = 'WHERE '.$w; }
		// Close  function myFilterQuery	
		}
//Finally  Close Product Class		
}

//// Class User   extends Controller
//class User  extends Controller{
//	         
//		public function __construct(){
//			
//		    parent::__construct();
//		}
//	 
//		public function checkUser($user,$pass){
//			
//		    $sql  =  "SELECT * FROM user_info where uname='$user' and upass='$pass' ";
//		    $this->DB->exeQuery($sql);
//		    $final_rs= $this->DB->getrowCheck();
//		    return $final_rs;
//		}
//		
//		public function logout(){
//		   unset($_SESSION['userActive']);
//		   session_unset(); session_destroy();
//		   $msgg ="You Are Successfully LogOut";
//		   return $msgg;
//		}
//
//
//}

// Class Admin   extends Controller
class Admin  extends Controller{
	
	    public function __construct(){
		    
		  parent::__construct();
	    }
	    
	    public function getProduct($sql){
		    
		  $this->DB->exeQuery($sql);
		  $rs =  $this->DB->getvalueObject();
		  return $rs;
	    }
	    
	    public function getProduct_Info_Execution($sql){
	    
	        $this->DB->exeQuery($sql);
	        $rs =  $this->DB->getvalueAssoc();
	        return $rs;
	    }
	    
	    public function row_checkExe($sql){
	         
	        $this->DB->exeQuery($sql);
	        $rs =  $this->DB->getrowCheck();
	        return $rs;
	    }
        
	    public function saveProductsInfo($sql){
	    
	        $rs = $this->DB->exeQuery($sql);
	        return $rs;
	    }
	     

}

?>
