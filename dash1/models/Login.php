<?php

namespace dash\models;
class Login
{
	public $user_name;
	public $pass;
	public $c_user_name;
	public $c_pass;
	
     public function setUser($username)
	{
		
		if($username='FAC0035' or $username='FAC0040' )	
		{
		$this->user_name=$username;
		}	
	}
	
	 public function getUser(){
		return $this->user_name;
	}
	
	  public function setPassword($password)
	{    
	  if($password='Saladfox@456' or $password='Letterman@345' ){	
		$password=SHA1($password);	
		$this->pass=$password;
	  }
	}
	
	 public function getPassword(){
		return $this->pass;
	}
	
	
	public function setCookies($c_username,$c_password)
	{   
	    
		$c_password=SHA1($c_password);
        $this->c_user_name=$c_username;		
		$this->c_pass=$c_password;
			
	}
	
	 public function getCookies(){
		if($this->c_pass='Saladfox@456' && $this->c_user_name='FAC0035')
		{
			return true;
		}
		elseif($this->c_pass='Letterman@345' && $this->c_user_name='FAC0040')
		{
			return true;
		}
		else{
			return false;
		}
		
	}
	
	


}