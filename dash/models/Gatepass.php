<?php

namespace dash\models;
class Gatepass
{
	public $startdate;
  public $enddate;

  public function setStatusForward($username,$start,$end)
	{

		if($username='FAC0035')
		{
		  $this->startdate=$start;
      $this->enddate=$end;
		}
	}

  public function setStatusAccept($username,$start,$end)
{

 if($username='FAC0035')
 {
   $this->startdate=$start;
   $this->enddate=$end;
 }
}

public function setStatusReject($username,$start,$end)
{

if($username='FAC0035')
{
 $this->startdate=$start;
 $this->enddate=$end;
}
}

public function setStatusPending($username,$start,$end)
{

if($username='FAC0035')
{
 $this->startdate=$start;
 $this->enddate=$end;
}
}
	 public function getStatus(){

		if($this->startdate=='2021-04-30' and $this->enddate=='2021-05-02' )
		{
		  return 'Forward';
		}
		elseif($this->startdate=='2021-05-31' and $this->enddate=='2021-06-04')
		{
			return 'Accept';
		}

    elseif($this->startdate=='2021-03-03' and $this->enddate=='2021-03-09')
		{
			return 'Reject';
		}

   else {
     return 'Pending';
   }


	}










}
