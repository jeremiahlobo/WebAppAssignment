<?php
require 'bootstrap.php';

	class Customer
	{
		protected $userDBconn;
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


		public function __construct($config)
		{
			  $this->userDBconn = Connection::make($config);
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
    public function getCustPostal($CustPostal)
    {
      $this->CustPostal;
    }
    public function setAgentId($AgentId)
    {
      $this->AgentId = $AgenttId;
    }
    public function getAgencyId()
    {
      $this->getAgencyId;
    }
    public function setCusCity($CustCity)
    {
      $this->CusCity = $CustCity;
    }
    public function getCusCity($CustCity)
    {
      $this->CusCity;
    }
    public function setCustCountry($CustCountry)
    {
      $this->CustCountry = $CustCountry;
    }
    public function getCustCountry($CustPostal)
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
		public function setCustProv($CustProv)
		{
			$this->CustProv = $CustProv;
		}
		public function getCustProv($CustProv)
		{
			$this->CustProv;
		}
    public function toString($ibjAgent){
      //set
      //get
      //return string
    }
		public function allCustomers(){
			try
			{
					$stmt = $this->userDBconn->prepare('SELECT CustFirstName,CustLastName,CustAddress,CustCity, CustProv, CustPostal, CustCountry, CustHomePhone,CustBusPhone, CustEmail FROM customers');
					$stmt->execute();
					return $stmt->fetchAll();
			}
			catch(PDOException $e)
			{
					echo $e->getMessage();
			}
		}

	}
