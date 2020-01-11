<?php 

if(isset($_POST['number1']) && 
isset($_POST['number2']) &&
isset($_POST['operator']) 
){
  //Some code will excecute
  $num1 = $_POST['number1'];
  $num2 = $_POST['number2'];
  $opr = $_POST['operator'];

  

  switch($opr){
    case "+" :
      $result = $num1 + $num2;
      break;
    case "-":
      $result = $num1 - $num2;
      break;
    case "*":
      $result = $num1 * $num2;
      break;
    case "/":

      if($num2 == 0 )
      {
        $result =  $num1 . " cannot devided by 0";
      }
      else {
        $result = $num1 / $num2;
      }
      break;  
      
    default: 
      $result = "Wrong operator given.";
      break;

  }
  
  echo $result;
  
}
else 
{
  echo "Somethin not given.";
}