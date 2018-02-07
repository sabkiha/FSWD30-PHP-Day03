<?php

$mysqli = new mysqli('localhost','root','', 'test');

if (!$mysqli)
{
       print "<h1>Unable to Connect to MySQL</h1>";
}

$sql_statement  = "SELECT lastname, firstname, state ";
$sql_statement .= "FROM author ";
//$sql_statement .= "WHERE state = 'CA' ";
$sql_statement .= "ORDER BY lastname, firstname ";


// $sql_statement  = "SELECT lastname, firstname, state FROM author WHERE state = 'CA'  ORDER BY lastname, firstname ";
// var_dump($sql_statement);
$result = $mysqli->query($sql_statement);
// var_dump($result);
// die();


if (!$result) {
       $outputDisplay .= "<p>MySQL No: " . $mysqli->errno . "</p>";
       $outputDisplay .= "<p>MySQL Error: " . $mysqli->error . "</p>";
       $outputDisplay .= "<p>SQL Statement: " . $sql_statement . "</p>";
       $outputDisplay .= "<p>MySQL Affected Rows: " . $mysqli->affected_rows . "</p>";
}

#individual row
// $row = $result->fetch_assoc();

// $firstname = $row['firstname'];
// $lastname = $row['lastname'];
// $state = $row['state'];

// print "Author name: " . $firstname;
// print "<br>";
// print "Author lastname: " . $lastname;
// print "<br>";
// print "Author state: " . $state;

// # multiple rows
$rows = $result->fetch_all(MYSQLI_ASSOC);

foreach ($rows as $row) {
   echo "<hr>";
   echo "<br>";
   echo $row['firstname'];
   echo "<br>";
   echo $row['lastname'];
   echo "<br>";
   echo $row['state'];
}


/**
* This is a very basic DocBlock
*/

/**
* A simple class
*
* This is the long description for this class,
* which can span as many lines as needed. It is
* not required, whereas the short description is
* necessary.
*
* It can also span multiple paragraphs if the
* description merits that much verbiage.
*
* @author Jason Lengstorf <jason.lengstorf@ennuidesign.com>
* @copyright 2010 Ennui Design
* @license http://www.php.net/license/3_01.txt PHP License 3.01
*/
class SimpleClass
{
 /**
  * A public variable
  *
  * @var string stores data for the class
  */
 public $foo;

 /**
  * Sets $foo to a new value upon class instantiation
  *
  * @param string $val a value required for the class
  * @return void
  */
 public function __construct($val)
 {
     $this->foo = $val;
 }

 /**
  * Multiplies two integers
  *
  * Accepts a pair of integers and returns the
  * product of the two.
  *
  * @param int $bat a number to be multiplied
  * @param int $baz a number to be multiplied
  * @return int the product of the two parameters
  */
 public function bar($bat, $baz)
 {
     return $bat * $baz;
 }
}

?>

