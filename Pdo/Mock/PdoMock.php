<?php

namespace Naldz\Bundle\TestUtilityBundle\Pdo\Mock;

class PdoMock extends \PDO
{
    private $conString;
    private $user;
    private $pass;
    private $driverOptions;

    public function __construct($conString, $user = null, $password = null, $driverOptions = array())
    {
        $this->conString = $conString;
        $this->user = $user;
        $this->password = $password;
        $this->driverOptions = $driverOptions;
    }
    
    public function getConnectionString()
    {
        return $this->conString;
    }
    
    public function getUser()
    {
        return $this->user;
    }
    
    public function getPassword()
    {
        return $this->password;
    }

    public function getDriverOptions()
    {
        return $this->driverOptions;
    }
}