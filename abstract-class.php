<?php
abstract class Animal
{
   public $name;
   public $age;
  
   public function Describe()
   {
       return $this->name . ", " . $this->age . " years old";   
   }
}
class Dog extends Animal
{
   public function Greet()
   {
       return "Woof!";   
   }
  
   public function Describe()
   {
       return parent::Describe() . ", I'm a dog !";   
   }
}
# $animal = new Animal(); will throw an error, we can not create instance from an abstract class
$animal = new Dog();
$animal->name = "Bob";
$animal->age = 7;
echo $animal->Describe();
echo "<br>";
echo $animal->Greet();
?>