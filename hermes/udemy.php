<?php

/**
* 
*/
class User
{
	protected $name,$age;

	//WHEN OBJECT IS CREATED
	public	function __construct($name_ = 'no name', $age_=18)
	{
		$this->name = $name_;
		$this->age = $age_;
	}
	 

	//__get MAGIC METHOD
	public function __get($property){
		if(property_exists($ , $property)){
			return $this->$property;
		}
	}
		//WHEN NO OTHER reference to the object
	public function __destruct(){
		echo "<br>destructed ".$this->name.'<br>';
	}

}

class Player extends User
{
	private
	function __construct(argument)
	{
		# code...
	}
}


$user1 = new User('BoogieBill',24);
echo $user1->name;
echo "<br>";
echo $user1->age;

echo "<br>";
echo $user1->__get('name');

?>