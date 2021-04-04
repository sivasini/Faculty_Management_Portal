<?php

namespace dash\models;
class Forget
{
	public $sq_1;
	public $sq_2;
	
     public function setsq1($sq1)
	{
		
		if($sq1='Geetha' )	
		{
		$this->sq_1=$sq1;
		}	
	}
	
	 public function getsq1(){
		return $this->sq_1;
	}
	
	  public function setsq2($sq1)
	{    
	  if($sq2='Trichy' )	
		{
		$this->sq_2=$sq2;
		}
	}
	
	 public function getsq2(){
		return $this->sq_2;
	}
	
	
	
	


}