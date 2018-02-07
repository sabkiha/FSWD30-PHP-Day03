<?php 

# Class definition--------------
Class Employee {

	public $name;
	public $salary;
	public $position;
	public static $hours = 40;

	function __construct($name, $salary, $position){
		$this->name = $name;
		$this->salary = $salary;
		$this->position = $position;
	}

	public function showDetails() {
		return 'My name is '. $this->name .'. My position in the company is '.$this->position.' and my monthly salary is '. $this->salary . '  Euros for '. Employee::$hours . ' hours per week.';
	}
}
# ----- End class definition	

Class Driver extends Employee {

	public $driving_license = "C";
		public function showDetails() {
		return 'My name is '. $this->name .'. My position in the company is '.$this->position.' and my monthly salary is '. $this->salary . '  Euros for '. Employee::$hours . ' hours per week. I have a driving license ' . $this->driving_license;
	}
}

# creating a new instance from a class ---------
$employeeObject1 = new Employee('Martin', '5000', 'Manager');
$result1 = $employeeObject1->showDetails();
# -----------------------
# printing the result
echo $result1;
# ---------------

echo "<hr>";

$employeeObject2 = new Driver('Peter', '3200', 'Chauffeur');
$result2 = $employeeObject2->showDetails();
echo $result2;

 ?>
