<?php

namespace dash\models;
class HeadFaculty
{
    public $temp;
     public function setDate($d1,$d2)
	{
	    $diff=date_diff($d2,$d1);
			$this->temp=$diff->format('%a');

	}

	 public function getDiff(){
		if ($this->temp>0)
    {
       return true;
    }
    else {
      {
          return 'Not_Functioning';
      }
    }
	}

  public function getApproval()
	{
		if ($this->temp>20)
    {
       return 'Reject';
    }
    else {
      {
          return 'Accept';
      }
    }
	}




}
?>
