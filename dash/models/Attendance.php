<?php

namespace dash\models;
class Attendance
{

	public $sick;
	public $casual;
  public $paid;
  public $od;
  public $user='FAC0035';

     public function setSick($username,$sick)
	{
		$ref=15;
		if($username='$user')
		{
		  $this->sick=($ref-$sick )/$ref;
      $this->sick=$this->sick*100;
	  $this->sick=100-$this->sick;
		}
	}

	 public function getSick(){
		if ($this->sick >80)
    {
       return 'danger';
    }
    else {
      {
          return 'Green';
      }
    }
	}


public function setOD($username,$od_test)
{
 $ref=20;
 if($username='$user')
 {
   $this->od=($ref-$od_test )/$ref;
   $this->od=$this->od*100;
   $this->od=100-$this->od;
 }
}

public function getOD(){
 if ($this->od >80)
 {
    return 'danger';
 }
 else {
   {
       return 'Green';
   }
 }
}


public function setCasual($username,$casual_test)
{
 $ref=20;
 if($username='$user')
 {
   $this->casual=($ref-$casual_test )/$ref;
   $this->casual=$this->casual*100;
    $this->casual=100-$this->casual;
 }
}

public function getCasual(){
 if ($this->casual >80)
 {
    return 'danger';
 }
 else {
   {
       return 'Green';
   }
 }
}


public function setPaid($username,$paid_test)
{
 $ref=10;
 if($username='$user')
 {
   $this->paid=($ref-$paid_test )/$ref;
   $this->paid=$this->paid*100;
   $this->paid=100-$this->paid;
 }
}

public function getPaid(){
 if ($this->paid >80)
 {
    return 'danger';
 }
 else {
   {
       return 'Green';
   }
 }
}





}
?>
