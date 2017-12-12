<?php
class engineClass{
	public  $sql;
	public $session;
	public $phpmailer;
	function  __construct() {
			global $sql,$session,$phpmailer;
			$this->session= $session;
			$this->sql = $sql;
			$this->phpmailer = $phpmailer;
		}
		public function concatmoney($num){
			if($num>1000000000000) {
				return round(($num/1000000000000),1).' tri';
				}else if($num>1000000000){ return round(($num/1000000000),1).' bil';
				}else if($num>1000000) {return round(($num/1000000),1).' mil';
				}else if($num>1000){ return round(($num/1000),1).' k';
				}
			return number_format($num);
		}
		public function getActorDetails(){
				$actor_id = $this->session->get("actorid");
				$branchcode = $this->session->get("branchcode");
				$churchcode = $this->session->get("churchcode");
				$stmt = $this->sql->Prepare("SELECT * FROM church_users WHERE USR_ID = ".$this->sql->Param('a')." AND USR_BRAN_CODE=".$this->sql->Param('b')." AND USR_CHUR_CODE=".$this->sql->Param('c')." ");
				$stmt = $this->sql->Execute($stmt,array($actor_id,$branchcode,$churchcode));
				if($stmt && ($stmt->RecordCount() > 0)){
		 return $stmt->FetchNextObject();
		 }else{
				// print $this->sql->ErrorMsg();
				 return false;
		 }
		}//end of getActorsDetails

	public function getMembersByGroupId($group_id){
		$stmt =$sql->Prepare($sql->Execute("SELECT church_groups.GRP_NAME,church_members.MEM_NAME,church_members.MEM_GENDER,church_members.MEM_DATE_OF_BIRTH,church_members.MEM_EMAIL,church_members.MEM_PHONE_NUMBER,church_members.MEM_POSTAL_ADDRESS,church_members.MEM_OCCUPATION,church_members.MEM_PHOTO,church_members.MEM_ACTIVATION,church_members.MEM_STATUS FROM church_groups INNER JOIN church_member_group ON church_groups.GRP_ID = church_member_group.MGRP_GRP_ID INNER JOIN church_members ON church_member_group.MGRP_MEM_ID = church_members.MEM_ID WHERE church_member_group.MGRP_GRP_ID = ".$sql->Param('a')." "),array($group_id));
		if($stmt){
			return $stmt;
		}else{
			return false;
		}
	}

	public function msgBox($msg,$status){
		if(!empty($status)){
			if($status == "success"){
				echo '<div class="alert alert-success"> '.$msg.'</div>';
			}elseif($status == "info"){
				echo '<div class="alert alert-info"> '.$msg.'</div>';
			}else{
				 echo '<div class="alert alert-danger"> '.$msg.'</div>';
			}
		}
	}

	public function validatePostForm($microtime){
     	$postkey = $this->session->get('postkey');
     	if(empty($postkey)){
     		$postkey = 2;
     	}
     	if($postkey != $microtime){
     		if($postkey == 2){
     			$this->session->set('postkey',$microtime);
     		}else{
                 $this->session->del('postkey');
                 $this->session->set('postkey',$microtime);
             }
     		return true;
     	}else{
     		return false;
     	}
     }

	 public function readMore($string){
		 $string = strip_tags($string);

		if (strlen($string) > 50) {

			// truncate string
			$stringCut = substr($string, 0, 50);

			// make sure it ends in a word so assassinate doesn't become ass...
			$string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...'; 
		}
		return $string;
	 }
}
