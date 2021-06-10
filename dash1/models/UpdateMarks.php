<?php
namespace dash\models;
class UpdateMarks
{
  public $marks;
  public $error;

  public function setMarks($assignment1,$assignment2,$assignment3,$quiz1,$quiz2,$quiz3,$p1,$p2)
	{
    if($assignment1<=10 and $assignment2<=10 and $assignment3<=10 and $quiz1<=10 and $quiz2<=10 and $quiz3<=10 and $p1<=50 and $p2<=50)
    {
      $this->marks=($assignment1+$assignment2+$assignment3+$quiz1+$quiz2+$quiz3+$p1+$p2)*0.4375;
      $this->error=0;
    }
    else {
      {
        $this->marks=0;
        $this->error=1;
      }
    }

	}


  public function getSuccess()
  {
    if($this->error==1)
    {
      return 'Insert Error';
    }
    elseif($this->error==0) {
      {
        return 'Success';
      }
    }
  }

}
