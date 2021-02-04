<!DOCTYPE html>
<html>
<head>
<title>
    <?php echo("PHP Program #1"); ?>
</title>
</head>
<body>
<?php 
  
  echo "<h3>Program 1:</h3>";
  echo("Yay!");
  echo "<hr>";

  echo "<h3>Program 2:</h3>";
  $year = 2021; # number variable
  $month = "February"; # string variable
  echo "The current month and year(probably) are $month and $year";
  echo "<hr>";

  # program #3
  echo "<h3>Program 3:</h3>";
  $number = 2021;
  $string = "February";
  $decimal = 2021.0;
  $isLeapYear = false;
  echo "$number $string $decimal";
  echo $isLeapYear ? 'true':'false';
  echo "<hr>";
 ?>

</body>
</html>