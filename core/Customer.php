<?php
include "database/Connection.php";
require 'bootstrap.php';

	class Customers
	{
		private $CustomerId;
		private $CustFirstName;
		private $CustLastName;
		private $CustAddress;
    private $CustCity;
    private $CustProv;
    private $CustPostal;
    private $CustCountry;
		private $CustHomePhone;
    private $CustBusPhone;
    private $CustEmail;
    private $AgentId;
    protected $userDBconn;

		public function __construct($userDBconn, $CustomerId, $CustFirstName, $CustLastName,
    $CustAddress, $CustCity, $CustProv, $CustPostal, $CustCountry,
    $CustHomePhone, $CustBusPhone, $CustEmail, $AgentId )
		{
			$this->CustomerId = $CustomerId;
      $this->CustFirstName = $CustFirstName;
      $this->CustLastName = $CustLastName;
      $this->CustAddress = $CustAddress;
      $this->CustCity = $CustCity;
      $this->CustProv = $CustProv;
      $this->CustPostal = $CustPostal;
      $this->CustCountry = $CustPostal;
      $this->CustHomePhone = $CustHomePhone;
      $this->CustBusPhone = $CustBusPhone;
      $this->CustEmail = $CustEmail;
      $this->AgentId = $AgentId;

      }

		public function getCustomerId()
		{
			return $this->CustomerId;
		}
		public function setCustomerId($AgentId)
		{
			$this->CustomerId = $CustomerId;
		}
    public function setCustFirstName($CustomerId)
		{
			return $this->CustFirstName = $CustomerId;
		}
		public function getCustFirstName()
		{
			return $this->CustFirstName;
		}
		public function setCustLastName($CustLastName)
		{
			$this->CustLastName = $CustLastName;
		}
		public function getCustLastName()
		{
			return $this->CustLastName;
		}
		public function setCustBusPhone($CustBusPhone)
		{
			$this->CustBusPhone = $CustBusPhone;
		}
		public function getCustBusPhone($CustBusPhone)
		{
			return $this->CustBusPhone;
		}
    public function setCustEmail($CustEmail)
		{
			$this->CustEmail = $CustEmail;
		}
		public function getCustEmail($CustEmail)
		{
			return $this->CustEmail;
		}
    public function setAddress($CustAddress)
    {
      $this->CustAddress = $CustAddress;
    }
    public function getAddress($CustAddress)
    {
      $this->CustAddress;
    }
    public function setCustPostal($CustPostal)
    {
      $this->CustPostal = $CustPostal;
    }
    public function setCustPostal($CustPostal)
    {
      $this->CustPostal;
    }
    public function setAgentId($AgentId)
    {
      $this->AgentId = $AgenttId;
    }
    public function getAgencyId()
    {
      $this->getAgencyId
    }
    public function setCusCity($CustCity)
    {
      $this->CusCity = $CustCity;
    }
    public function getCusCity($CustCity)
    {
      $this->CusCity;
    }
    public function setCustPostal($CustPostal)
    {
      $this->CustPostal = $CusPostal;
    }
    public function getCustPostal($CustPostal)
    {
      $this->CustPostal;
    }
    public function setCustCountry($CustCountry)
    {
      $this->CustCountry = $CustCountry;
    }
    public function getCustPostal($CustPostal)
    {
      $this->CustCountry;
    }

    public function setCustCountry($CustCountry)
    {
      $this->CustCountry = $CustCountry;
    }
    public function getCustPostal($CustPostal)
    {
      $this->CustCountry;
    }

    public function setCustHomePhone($CustHomePhone)
    {
      $this->CustHomePhone = $CustHomePhone;
    }
    public function getCustHomePhone($CustHomePhone)
    {
      $this->CustHomePhone;
    }

    public function toString($ibjAgent){
      //set
      //get
      //return string
    }

	}
?>
