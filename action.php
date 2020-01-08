<?php 

// $_GET 

// if( isset($_GET['username']) && isset($_GET['contact']) )
// {
//     $name = $_GET['username'];
//     $phone = $_GET['contact'];

//     echo "Hello, " . $name . " Your Phone number is ". $phone;
// }
// else 
// {
//   echo("Sorry! something is missing.");
// }




// $_POST
// $operat = $_POST['operator'];

// Check  if the for is submitted or not.
if(isset($_POST['submit']))
{
  $number1 = $_POST['number1'];
  $number2 = $_POST['number2'];

  $opr = $_POST['operator'];



   
  // check if transfared data is numeric or not
  if(is_numeric($number1) && is_numeric($number2) )
  {

    if($opr == "+")
    {
      $result = $number1 + $number2;
    }
    elseif($opr == "-")
    {
      $result = $number1 - $number2;
    }
    elseif($opr == "*" || $opr == "X")
    {
      $result = $number1 * $number2;
    }
    elseif($opr == "/")
    {
      $result = round($number1 / $number2, 5);
    }
    else 
    {
      $result = "Undefined";

      echo "You are not a educated person <br>";
    }

    echo "Calculation = " . $result;
  }
  else 
  {
    echo "Opps non-numerical data submited.";
  }
}
else
{
  // Redirect to index.php
  header('location: index.php');
}

