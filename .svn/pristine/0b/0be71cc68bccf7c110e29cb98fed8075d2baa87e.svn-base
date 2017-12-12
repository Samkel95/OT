<?php
/*
 * This class contains functions related to companies details - 
 * registrations and users related transactions
 * Author: Ake
 */
class companyClass extends engineClass{

	function  __construct() {
		parent::__construct();
	}
	 
	 /*
	  * The function below generates the company details
	  */
	 public function getCompanyDetails(){
	 	$cpcode = "0";
	 	$cpcode = $this->session->get("saloncode");
	 	$stmt = $this->sql->Prepare("SELECT * FROM salon_companies WHERE COMP_COMPCODE = ".$this->sql->Param('a')." ");
	 	$stmt = $this->sql->Execute($stmt,array($cpcode));
	 	print $this->sql->ErrorMsg();
	 	
	 	if($stmt && ($stmt->RecordCount() > 0)){
	 		return $stmt;
	 	}else{
	 		return false;
	 	}
	 }
	 //End getChurchDetails
	 
	 /*
	  * The function below generates the company branch details
	  */
	 public function getCompanyBranchDetails(){
	 	$branchcode = "0";
	 	$branchcode = $this->session->get("branchcode");
	 	$stmt = $this->sql->Prepare("SELECT * FROM salon_branches WHERE BRAN_BRANCODE = ".$this->sql->Param('a')." ");
	 	$stmt = $this->sql->Execute($stmt,array($branchcode));
	 	print $this->sql->ErrorMsg();
	 	 
	 	if($stmt && ($stmt->RecordCount() > 0)){
	 		return $stmt;
	 	}else{
	 		return false;
	 	}
	 }
	 //End getChurchBranchDetails
	
	
	public function getcurrCompanyName($cp){
       $stmt = $this->sql->Prepare("SELECT * FROM salon_companies WHERE COMP_STATUS ='1' and  COMP_COMPCODE = ".$this->sql->Param('a')." ");
       $stmt = $this->sql->Execute(($stmt),array($cp));
       if($stmt && ($stmt->RecordCount() > 0)){
    while($obj = $stmt->FetchNextObject()){
	$company_name = $obj->COMP_NAME;
	}
	 return $company_name;
	
    }else{
       // print $this->sql->ErrorMsg();
        return false;
    }
   }//end of getcurrChurchName name
	
	
	
	public function getcurrBranchName($br){
       $stmt = $this->sql->Prepare("SELECT * FROM salon_branches WHERE BRAN_STATUS ='1' and  BRAN_BRANCODE = ".$this->sql->Param('a')." ");
       $stmt = $this->sql->Execute(($stmt),array($br));
       if($stmt && ($stmt->RecordCount() > 0)){
    while($obj = $stmt->FetchNextObject()){
	$bra_name = $obj->BRAN_NAME;
	}
	 return $bra_name;
	
    }else{
       // print $this->sql->ErrorMsg();
        return false;
    }
   }//end of getcurrBranchName name
	
	
	 public function getBranchName(){
       $stmt = $this->sql->Prepare("SELECT * FROM salon_branches WHERE BRAN_STATUS ='1' ");
       $stmt = $this->sql->Execute($stmt);
       if($stmt && ($stmt->RecordCount() > 0)){
    while($obj = $stmt->FetchNextObject()){
	$braa_name[$obj->BRAN_BRANCODE] = $obj->BRAN_NAME;
}
	 return $braa_name;
	
    }else{
       // print $this->sql->ErrorMsg();
        return false;
    }
   }//end of branch name
	
	
	
	
	// getNewBranchCode
	public function getNewBranchCode($company_code){
		$stmt = $this->sql->Execute($this->sql->Prepare("SELECT BRAN_BRANCODE FROM `salon_branches` WHERE BRAN_COMP_COMPCODE = ".$this->sql->Param('a')." ORDER BY BRAN_BRANCODE DESC LIMIT 1"),array($company_code));
		print $this->sql->ErrorMsg();
		
		$stmt2 = $this->sql->Execute($this->sql->Prepare("SELECT COMP_ALIAS FROM salon_companies WHERE COMP_COMPCODE = ".$this->sql->Param('a')),array($church_code));
		print $this->sql->ErrorMsg();
		$obj2 = $stmt2->FetchNextObject();
		$company_alias = '';
		$company_alias = $obj2->COMP_ALIAS;
		
		if($stmt->RecordCount() > 0){
			$obj = $stmt->FetchNextObject();
			$order = substr($obj->BRAN_BRANCODE,-2);
			$order = $order + 1;
			if(strlen($order) == 1){
				$orderno = $company_alias.'0'.$order;
			}else{
				$orderno = $company_alias.$order;
			}
		}else{
			$orderno = $company_alias.'01';
		}
		return $orderno;
	}
	//End getNewBranchCode
	
	public function getCompanyAlias(){
		$obj = $this->getCompanyDetails();
		$objs = $obj->FetchNextObject();
		return $objs->COMP_ALIAS;
	}

	public function getcurrCompanyLogo($cp){
       $stmt = $this->sql->Prepare("SELECT * FROM salon_companies WHERE COMP_STATUS ='1' and  COMP_COMPCODE = ".$this->sql->Param('a')." ");
       $stmt = $this->sql->Execute(($stmt),array($cp));
       if($stmt && ($stmt->RecordCount() > 0)){
    while($obj = $stmt->FetchNextObject()){
	$company_logo = $obj->COMP_LOGO;
	}
	 return $company_logo;
	
    }else{
       // print $this->sql->ErrorMsg();
        return false;
    }
   }//end of
}
?>