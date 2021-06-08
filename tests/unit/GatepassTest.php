<?php


class GatepassTest extends \PHPUnit\Framework\TestCase
{
    public function testStatusForward()
    {
    $user=new \dash\models\Gatepass;
		$start='2021-04-30';
    $end='2021-05-02';
		$user->setStatusForward('FAC0035',$start,$end);
		$this->assertEquals($user->getStatus(),'Forward');
    }

	public function testStatusAccept()
    {
      $user=new \dash\models\Gatepass;
  		$start='2021-05-31';
      $end='2021-06-04';
  		$user->setStatusAccept('FAC0035',$start,$end);
  		$this->assertEquals($user->getStatus(),'Accept');
    }

	public function testStatusReject()
    {
      $user=new \dash\models\Gatepass;
  		$start='2021-03-03';
      $end='2021-03-09';
  		$user->setStatusReject('FAC0035',$start,$end);
  		$this->assertEquals($user->getStatus(),'Reject');
    }
	public function testStatusPending()
    {
      $user=new \dash\models\Gatepass;
  		$start='2021-04-11';
      $end='2021-04-17';
  		$user->setStatusPending('FAC0035',$start,$end);
  		$this->assertEquals($user->getStatus(),'Pending');
    }

}

?>
