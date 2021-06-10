<?php
namespace dash\models;
class MarkList
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
        $this->error=1;
      }
    }

	}

  public function getMarks()
  {
    return $this->marks;
  }

  public function getColor()
  {
    if($this->marks>60){
      return 'Green';

    }
    elseif($this->marks<=60 && $this->marks>=30){
      return 'Yellow';
    }
    else{
      return 'Red';
    }
  }

  public function getError()
  {
    if($this->error==1)
    {
      return True;
    }
    else {
      {return False;
      }
    }
  }

}
