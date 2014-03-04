<?php 

namespace Naldz\Bundle\TestUtilityBundle\Tests\Pdo\Mock;

use Naldz\Bundle\TestUtilityBundle\Pdo\Mock\PdoMock; 

class PdoMockTest extends \PHPUnit_Framework_TestCase
{

	public function testGetters()
	{
		$pdoMock = new PdoMock('connectionString', 'userName', 'password', array('attr1' => 'attr1_value'));

		$this->assertEquals('connectionString', $pdoMock->getConnectionString());
		$this->assertEquals('userName', $pdoMock->getUser());
		$this->assertEquals('password', $pdoMock->getPassword());
		$this->assertEquals(array('attr1' => 'attr1_value'), $pdoMock->getDriverOptions());

	}

}