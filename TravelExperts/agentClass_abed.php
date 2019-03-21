<?php 
// 	Write a PHP class that can be used to instantiate Agent objects. In your class, create a constructor that will receive an array of agent data and store it inside the object as it is created. Set up a property in the class for each column in the Agent table in the database.

// Write get and set methods for each property. Write a toString method that will get the values from the properties, format them into a comma separated string and return the string.

// Test your Agent class by modifying the script from Day11 that receives your agent form data and inserts new agents. When the form is received, instead of just passing the $_REQUEST array to the addAgent function, create an Agent object, put the form data into it, and pass the object to the function. Modify the addAgent function to receive an Agent object and use its methods to get the data to build your SQL INSERT string.


	class Agent{
		private $id;
		private $firstName;
		private $middleInitial;
		private $lastName;
		private $phoneNumber;
		private $email;
		private $position;
		private $agencyId;


		public function __construct($agentData){
			$this->id = $agentData["id"];
			$this->firstName = $agentData["firstName"];
			$this->middleInitial = $agentData["middleInitial"];
			$this->lastName = $agentData["lastName"];
			$this->phoneNumber = $agentData["phoneNumber"];
			$this->email = $agentData["email"];
			$this->position = $agentData["position"];
			$this->agencyId = $agentData["agencyId"];
		}

		public function getID(){
			return $this->id;
		}

		public function getFirstName(){
			return $this->firstName;
		}

		public function getMiddleInitial(){
			return $this->middleInitial;
		}

		public function getLastName(){
			return $this->lastName;
		}

		public function getPhoneNumber(){
			return $this->phoneNumber;
		}

		public function getEmail(){
			return $this->email;
		}

		public function getPosition(){
			return $this->position;
		}

		public function getAgencyId(){
			return $this->agencyId;
		}

		public function setID($id){
			$this->id = $id;
		}

		public function setFirstName($firstName){
			$this->firstName = $firstName;
		}

		public function setMiddleInitial($middleInitial){
			$this->middleInitial = $middleInitial;
		}

		public function setLastName($lastName){
			$this->lastName = $lastName;
		}

		public function setPhoneNumber($phoneNumber){
			$this->phoneNumber = $phoneNumber;
		}

		public function setEmail($email){
			$this->email = $email;
		}

		public function setPosition($position){
			$this->position = $position;
		}

		public function sertAgencyId($agencyId){
			$this->agencyId = $agencyId;
		}

		public function toString(){
			$output = $this->id . ',';
			$output .= $this->firstName . ',';
			$output .= $this->middleInitial . ',';
			$output .= $this->lastName . ',';
			$output .= $this->phoneNumber . ',';
			$output .= $this->email . ',';
			$output .= $this->position . ',';
			$output .= $this->agencyId;
			return $output;
		}
	}


	$agent["id"] = "1";
	$agent["firstName"] = "Abed";
	$agent["middleInitial"] = "H";
	$agent["lastName"] = "Alansari";
	$agent["phoneNumber"] = "7182243509";
	$agent["email"] = "abdwebus@hotmail.com";
	$agent["position"] = "CEO";
	$agent["agencyId"] = "711";
	
	$abed = new Agent($agent);
	echo $abed->toString();
	

?>