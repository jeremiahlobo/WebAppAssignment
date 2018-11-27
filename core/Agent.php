<?php
require 'bootstrap.php';

	class Agent
	{
    protected $userDBconn;
		private $AgentId;
		private $AgtFirstName;
		private $AgtLastName;
		private $AgtMiddleInital;
		private $AgtBusPhone;
		private $AgtEmail;
    private $AgencyId;
    private $AgtPosition;

		public function __construct($config)
		{
      $this->userDBconn = Connection::make($config);
			// $this->AgentId = $AgentId;
      // $this->AgtFirstName = $AgtFirstName;
      // $this->AgtLastName = $AgtLastName;
      // $this->AgtMiddleInital = $AgtMiddleInital;
      // $this->AgtBusPhone = $AgtBusPhone;
      // $this->AgtEmail = $AgtEmail;
      // $this->$AgencyId = $AgencyId;
      // $this->AgtPosition = $AgtPosition;
		}
		// , $AgtFirstName, $AgtMiddleInital,
    //                             $AgtLastName, $AgtBusPhone,
    //                             $AgtEmail, $AgencyId, $AgtPosition

		public function getAgentId()
		{
			return $this->AgentId;
		}

		public function setAgentId($AgentId)
		{
			$this->AgentId = $AgentId;
		}

    public function setAgtFirstName($AgtFirstName)
		{
			return $this->AgtFirstName = $AgtFirstName;
		}
		public function getAgtFirstName()
		{
			return $this->AgtFirstName;
		}

		public function setAgtLastName($AgtLastName)
		{
			$this->AgtLastName = $AgtLastName;
		}

		public function getAgtLastName()
		{
			return $this->AgtLastName;
		}

		public function setAgtBusPhone($AgtBusPhone)
		{
			$this->AgtBusPhone = $AgtBusPhone;
		}
		public function getAgtBusPhone($AgtBusPhone)
		{
			return $this->AgtBusPhone;
		}
    public function setAgtEmail($AgtEmail)
		{
			$this->AgtEmail = $AgtEmail;
		}
		public function getAgtEmail($AgtEmail)
		{
			return $this->AgtEmail;
		}
    public function setAgtPosition($AgtPosition)
    {
      $this->AgtPosition = $AgtPosition;
    }
    public function getAgtPosition($AgtPosition)
    {
      $this->AgtPosition;
    }
    public function setAgencyId($AgencyId)
    {
      $this->AgtAgencyId = $AgtAgencyId;
    }
    public function getAgencyId()
    {
      $this->AgtAgencyId;
    }

    public function toString($ibjAgent){
      //set
      //get
      //return string
    }
    public function addAgent($clean)
    {
       try
       {

           $stmt = $this->userDBconn->prepare('INSERT INTO agents(AgtFirstName,AgtMiddleInitial,AgtLastName, AgtBusPhone,AgtEmail, AgtPosition,AgencyId)VALUES(:agentfirstname,:middleintial,:agentlastname, :busphone,:agentemail,:typeagent,:agencyId)');
           $stmt->bindparam(':agentfirstname', $clean['username']);
           $stmt->bindparam(':middleintial', $clean['middleintial']);
					 $stmt->bindparam(':agentlastname', $clean['agentlastname']);
					 $stmt->bindparam(':busphone', $clean['busphone']);
           $stmt->bindparam(':agentemail', $clean['agentemail']);
           $stmt->bindparam(':typeagent', $clean['typeagent']);
					 $stmt->bindparam(':agencyId', $clean['agencyId']);
           $stmt->execute();
           return true;
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
    }
		public function allAgents()
		{
			 try
			 {
					 $stmt = $this->userDBconn->prepare('SELECT AgtFirstName,AgtMiddleInitial,AgtLastName,AgtBusPhone,AgtEmail, AgtPosition FROM agents');
					 $stmt->execute();
					 return $stmt->fetchAll();
			 }
			 catch(PDOException $e)
			 {
					 echo $e->getMessage();
			 }
		}

	}
?>
