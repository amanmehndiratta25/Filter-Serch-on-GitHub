<?php
include('../Config/Controller.class.php');
include('../Config/UserClass.php');
class Connection{
    var    $admin_obj;
    public $Description; 
    public $Brand;  
    public $Size;
    public $Name;
    public $Price;
    public $Color;
    public $site_Country;
    public $Site_Owner_Name; 
    public $Company_Name;  
    public $Company_Address;
    public $Company_Website;
    public $Company_Phone;
    
    
    
    
    public function __Construct($Description,$Brand,$Size,$Name,$Price,$Color,$site_Country,$Site_Owner_Name,$Company_Name,$Company_Address,$Company_Website,$Company_Phone){
		 
          $this->Description      = $Description ;
		  $this->Brand            = $Brand ;
		  $this->Size             = $Size ;
          $this->Name             = $Name ;
		  $this->Price            = $Price ;
		  $this->Color            = $Color ;
		  $this->site_Country     = $site_Country ;
		  $this->Site_Owner_Name  = $Site_Owner_Name ;                           
		  $this->Company_Name     = $Company_Name ;
		  $this->Company_Address  = $Company_Address ;
		  $this->Company_Website  = $Company_Website ;
		  $this->Company_Phone    = $Company_Phone ;
		  // Create an Object name admin_obj of Admin Class inherited from  extends Controller Class of Config Folder
		  $this->admin_obj=new  Admin()	;
	}
	    //Close Class Constructor
}
 
 

