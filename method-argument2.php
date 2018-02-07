
<!DOCTYPE html>
<html>
<head>
       <title>SleptYearsPassDataElegant</title>
</head>
<body>
<h1>SleptYearsPassDataElegant</h1>
<?php
//Define the Class
class SleptYearsPassData2
{
   public $hoursSleptperNight = 8;
   public $myAge = 44;
   public function calcSleptYears2()
       {
               $sleptYears = ($this->myAge * $this->hoursSleptperNight)/24;
               return $sleptYears;
       }
}
//Execute Code Using the Class
$mySleptYearsPassData = new SleptYearsPassData2();
$rtnVal
 = $mySleptYearsPassData->calcSleptYears2();
print "You have slept elegantly $rtnVal years of your life away !";

?>
</body>
</html>