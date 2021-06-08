<?php


class MarkListTest extends \PHPUnit\Framework\TestCase
{
    public function test1()
    {
    $user=new \dash\models\MarkList;
    $assignment1=6;
    $assignment2=3;
    $assignment3=4;
    $quiz1=4;
    $quiz2=3;
    $quiz3=6;
    $p1=24;
    $p2=12;
		$user->setMarks($assignment1,$assignment2,$assignment3,$quiz1,$quiz2,$quiz3,$p1,$p2);
		$this->assertEquals($user->getMarks(),27.125);
    }

    public function test2()
    {
    $user=new \dash\models\MarkList;
    $assignment1=9;
    $assignment2=3;
    $assignment3=4;
    $quiz1=4;
    $quiz2=5;
    $quiz3=4;
    $p1=33;
    $p2=44;
    $user->setMarks($assignment1,$assignment2,$assignment3,$quiz1,$quiz2,$quiz3,$p1,$p2);
    $this->assertEquals($user->getMarks(),46.375);
    }

    public function test3()
    {
    $user=new \dash\models\MarkList;
    $assignment1=8;
    $assignment2=3;
    $assignment3=5;
    $quiz1=4;
    $quiz2=5;
    $quiz3=3;
    $p1=45;
    $p2=23;
    $user->setMarks($assignment1,$assignment2,$assignment3,$quiz1,$quiz2,$quiz3,$p1,$p2);
    $this->assertEquals($user->getMarks(),42);
    }

    public function test4()
    {
    $user=new \dash\models\MarkList;
    $assignment1=9;
    $assignment2=9;
    $assignment3=7;
    $quiz1=8;
    $quiz2=7;
    $quiz3=8;
    $p1=45;
    $p2=46;
    $user->setMarks($assignment1,$assignment2,$assignment3,$quiz1,$quiz2,$quiz3,$p1,$p2);
    $this->assertEquals($user->getMarks(),60.8125);
    }

    public function test5()
    {
    $user=new \dash\models\MarkList;
    $assignment1=6;
    $assignment2=3;
    $assignment3=4;
    $quiz1=4;
    $quiz2=3;
    $quiz3=6;
    $p1=24;
    $p2=12;
		$user->setMarks($assignment1,$assignment2,$assignment3,$quiz1,$quiz2,$quiz3,$p1,$p2);
		$this->assertEquals($user->getColor(),'Red');
    }

    public function test6()
    {
    $user=new \dash\models\MarkList;
    $assignment1=9;
    $assignment2=3;
    $assignment3=4;
    $quiz1=4;
    $quiz2=5;
    $quiz3=4;
    $p1=33;
    $p2=44;
    $user->setMarks($assignment1,$assignment2,$assignment3,$quiz1,$quiz2,$quiz3,$p1,$p2);
    $this->assertEquals($user->getColor(),'Yellow');
    }

    public function test7()
    {
    $user=new \dash\models\MarkList;
    $assignment1=8;
    $assignment2=3;
    $assignment3=5;
    $quiz1=4;
    $quiz2=5;
    $quiz3=3;
    $p1=45;
    $p2=23;
    $user->setMarks($assignment1,$assignment2,$assignment3,$quiz1,$quiz2,$quiz3,$p1,$p2);
    $this->assertEquals($user->getColor(),'Yellow');
    }

    public function test8()
    {
    $user=new \dash\models\MarkList;
    $assignment1=9;
    $assignment2=9;
    $assignment3=7;
    $quiz1=8;
    $quiz2=7;
    $quiz3=8;
    $p1=45;
    $p2=46;
    $user->setMarks($assignment1,$assignment2,$assignment3,$quiz1,$quiz2,$quiz3,$p1,$p2);
    $this->assertEquals($user->getColor(),'Green');
  }

    public function test9()
    {
    $user=new \dash\models\MarkList;
    $assignment1=15;
    $assignment2=3;
    $assignment3=5;
    $quiz1=4;
    $quiz2=5;
    $quiz3=3;
    $p1=45;
    $p2=23;
    $user->setMarks($assignment1,$assignment2,$assignment3,$quiz1,$quiz2,$quiz3,$p1,$p2);
    $this->assertTrue($user->getError());
    }

    public function test10()
    {
    $user=new \dash\models\MarkList;
    $assignment1=9;
    $assignment2=9;
    $assignment3=7;
    $quiz1=8;
    $quiz2=7;
    $quiz3=8;
    $p1=45;
    $p2=46;
    $user->setMarks($assignment1,$assignment2,$assignment3,$quiz1,$quiz2,$quiz3,$p1,$p2);
    $this->assertFalse($user->getError());
  }



}

?>
