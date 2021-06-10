<?php

namespace dash\models;
class Profile
{
	public $qual;
	public $email;
	public $phone;
	public $position;
	public $dept;
	public $ewallet;
	
	
     public function setQual($username,$qual)
	{
		
		if($username='FAC0035' and $qual='M. Tech' )	
		{
		  $this->qual=$qual;
		}	
	}
	
	 public function getQual(){
		 
		if($this->qual='M. Tech' )	
		{
		  return true;
		}
		else
		{
			return false;
		}
	}
	
	 public function setEmail($username,$email)
	{
		
		if($username='FAC0035' and $email='ramkumar@gmail.com' )	
		{
		  $this->email=$email;
		}	
	}
	
	 public function getEmail(){
		 
		if($this->email='ramkumar@gmail.com' )	
		{
		  return true;
		}
		else{
			return false;
		}
	}
	
	 public function setPhone($username,$phone)
	{
		
		if($username='FAC0035' and $phone='ramkumar@gmail.com' )	
		{
		  $this->phone=$phone;
		}	
	}
	
	 public function getPhone(){
		 
		if($this->phone='9843249546' )	
		{
		  return true;
		}
		else{
			return false;
		}
	}
	
	 public function setPosition($username,$pos)
	{
		
		if($username='FAC0035' and $pos='Assistant Professor' )	
		{
		  $this->position=$pos;
		}	
	}
	
	 public function getPosition(){
		 
		if($this->position='Assistant Professor' )	
		{
		  return true;
		}
		else{
			return false;
		}
	}
	
	public function setDept($username,$dept)
	{
		
		if($username='FAC0035' and $dept='Computer Science' )	
		{
		  $this->dept=$dept;
		}	
	}
	
	 public function getDept(){
		 
		if($this->dept='Computer Science' )	
		{
		  return true;
		}
		else{
			return false;
		}
	}
	
	public function setWallet($username,$ewallet)
	{
		
		if($username='FAC0035' and $ewallet='150' )	
		{
		  $this->ewallet=$ewallet;
		}	
	}
	
	 public function getWallet(){
		 
		if($this->ewallet='150' )	
		{
		  return true;
		}
		else{
			return false;
		}
	}
	
	public function getnotify(){
		 
		if($this->ewallet<'500' )	
		{
		  return 'reimburse';
		}
		else{
			return 'No reimbursement';
		}
	}
	
	  
	
	
	


}