<?php


class UpdateMarksTest extends \PHPUnit\Framework\TestCase
{
    public function test1()
    {
    $user=new \dash\models\UpdateMarks;
    $assignment1=6;
    $assignment2=3;
    $assignment3=5;
    $quiz1=4;
    $quiz2=3;
    $quiz3=6;
    $p1=24;
    $p2=35;
		$user->setMarks($assignment1,$assignment2,$assignment3,$quiz1,$quiz2,$quiz3,$p1,$p2);
		$this->assertEquals($user->getSuccess(),'Success');
    }

    public function test2()
    {
    $user=new \dash\models\UpdateMarks;
    $assignment1=6;
    $assignment2=3;
    $assignment3=11;
    $quiz1=25;
    $quiz2=3;
    $quiz3=6;
    $p1=24;
    $p2=55;
		$user->setMarks($assignment1,$assignment2,$assignment3,$quiz1,$quiz2,$quiz3,$p1,$p2);
		$this->assertEquals($user->getSuccess(),'Insert Error');
    }

    public function test3()
    {
    $user=new \dash\models\UpdateMarks;
    $assignment1=6;
    $assignment2=3;
    $assignment3=5;
    $quiz1=4;
    $quiz2=3;
    $quiz3=6;
    $p1=24;
    $p2=35;
		$user->setMarks($assignment1,$assignment2,$assignment3,$quiz1,$quiz2,$quiz3,$p1,$p2);
		$this->assertEquals($user->getSuccess(),'Success');
    }

    public function test4()
    {
    $user=new \dash\models\UpdateMarks;
    $assignment1=6;
    $assignment2=3;
    $assignment3=1;
    $quiz1=4;
    $quiz2=99;
    $quiz3=6;
    $p1=24;
    $p2=55;
		$user->setMarks($assignment1,$assignment2,$assignment3,$quiz1,$quiz2,$quiz3,$p1,$p2);
		$this->assertEquals($user->getSuccess(),'Insert Error');
    }

    public function test5()
    {
    $user=new \dash\models\UpdateMarks;
    $assignment1=6;
    $assignment2=3;
    $assignment3=5;
    $quiz1=4;
    $quiz2=3;
    $quiz3=6;
    $p1=24;
    $p2=55;
		$user->setMarks($assignment1,$assignment2,$assignment3,$quiz1,$quiz2,$quiz3,$p1,$p2);
		$this->assertEquals($user->getSuccess(),'Insert Error');
    }

    public function test6()
    {
    $user=new \dash\models\UpdateMarks;
    $assignment1=6;
    $assignment2=3;
    $assignment3=11;
    $quiz1=4;
    $quiz2=3;
    $quiz3=6;
    $p1=64;
    $p2=10;
		$user->setMarks($assignment1,$assignment2,$assignment3,$quiz1,$quiz2,$quiz3,$p1,$p2);
		$this->assertEquals($user->getSuccess(),'Insert Error');
    }
}

?>
