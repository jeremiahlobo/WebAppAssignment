<?php
	class Agent
	{
		private $AgentId;
		private $AgtFirstName;
		private $AgtLastName;
		private $AgtMiddleInital;
		private $AgtBusPhone;
		private $AgttEmail;
    private $AgencyId;
    private $AgtPosition;

		public function __construct($AgentId, $AgtFirstName, $AgtLastName, $AgtMiddleInital, $AgtBusPhone, $AgttEmail, $AgencyId, $AgtPosition )
		{
			$this->AgentId = $AgentId;
      $this->AgentId = $AgtFirstName;
      $this->AgentId = $AgtLastName;
      $this->AgentId = $AgtMiddleInital;
      $this->AgentId = $AgtBusPhone;
      $this->AgentId = $AgttEmail;
      $this->AgentId = $AgentId;
      $this->$AgencyId = $AgencyId;
      $this->AgtPosition = $AgtPosition
		}

		public function getAgentId()
		{
			return $this->AgentId;
		}

		public function setAgentId($AgentId)
		{
			$this->AgentId = $AgentId;
		}

    public function setAgtFirstName()
		{
			return $this->AgtFirstName;
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
    public function setAgtBusPhone($AgtEmail)
		{
			$this->AgtBusPhone = $AgtBusPhone;
		}
		public function getAgtBusPhone($AgtBusPhone)
		{
			return $this->AgtBusPhone;
		}
    public function setAgtPosition($AgtPosition)
    {
      $this->AgtPosition = $AgtPosition;
    }
    public function setAgtPosition($AgtPosition)
    {
      $this->AgtPosition;
    }
    public function setAgencyId($AgencyId)
    {
      $this->AgtAgencyId = $AgtAgencyId;
    }
    public function getAgencyId()
    {
      $this->AgtAgencyId
    }
    public function getAgtBusPhone($AgtBusPhone)
    {
      $this->AgtBusPhone = $AgtBusPhone;
    }
    public function setAgtBusPhone($AgtBusPhone)
    {
      $this->AgtBusPhone = $AgtBusPhone;
    }
    public function getAgtBusPhone($AgtBusPhone)
    {
      $this->AgtBusPhone = $AgtBusPhone;
    }

    public function toString($ibjAgent){
      //set
      //get
      //return string
    }

	}
?>
