<?php
$answer1 = $answer2 = $answer3 = $answer4 = $answer5 = $answer6 = "";
$answer7 = $answer8 = $answer9 = $answer10 = $answer11 = $answer12 = "";
$answer13 = $answer14 = $answer15 = $answer16 = $answer17 = $answer18 = $answer19 = $answer20 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["q1"])) 
  {
    $answer1 = "";
  } 
  else 
  {
    $answer1 = test_input($_POST["q1"]);
  }
  
  if (empty($_POST["q2"])) 
  {
    $answer2 = "";
  } 
  else 
  {
    $answer2 = test_input($_POST["q2"]);
  }
  
  if (empty($_POST["q3"])) 
  {
    $answer3 = "";
  } 
  else 
  {
    $answer3 = test_input($_POST["q3"]);
  }
  
  if (empty($_POST["q4"])) 
  {
    $answer4 = "";
  } 
  else 
  {
    $answer4 = test_input($_POST["q4"]);
  }
  
  if (empty($_POST["q5"])) 
  {
    $answer5 = "";
  } 
  else 
  {
    $answer5 = test_input($_POST["q5"]);
  }
  
  if (empty($_POST["q6"])) 
  {
    $answer6 = "";
  } 
  else 
  {
    $answer6 = test_input($_POST["q6"]);
  }
  
  if (empty($_POST["q7"])) 
  {
    $answer7 = "";
  } 
  else 
  {
    $answer7 = test_input($_POST["q7"]);
  }
  
  if (empty($_POST["q8"])) 
  {
    $answer8 = "";
  } 
  else 
  {
    $answer8 = test_input($_POST["q8"]);
  }
  
  if (empty($_POST["q9"])) 
  {
    $answer9 = "";
  } 
  else 
  {
    $answer9 = test_input($_POST["q9"]);
  }
  
  if (empty($_POST["q10"])) 
  {
    $answer10 = "";
  } 
  else 
  {
    $answer10 = test_input($_POST["q10"]);
  }
  
  if (empty($_POST["q11"])) 
  {
    $answer11 = "";
  } 
  else 
  {
    $answer11 = test_input($_POST["q11"]);
  }
  
  if (empty($_POST["q12"])) 
  {
    $answer12 = "";
  } 
  else 
  {
    $answer12 = test_input($_POST["q12"]);
  }
  
  if (empty($_POST["q13"])) 
  {
    $answer13 = "";
  } 
  else 
  {
    $answer13 = test_input($_POST["q13"]);
  }
  
  if (empty($_POST["q14"])) 
  {
    $answer14 = "";
  } 
  else 
  {
    $answer14 = test_input($_POST["q14"]);
  }
  
  if (empty($_POST["q15"])) 
  {
    $answer15 = "";
  } 
  else 
  {
    $answer15 = test_input($_POST["q15"]);
  }
  
  if (empty($_POST["q16"])) 
  {
    $answer16 = "";
  } 
  else 
  {
    $answer16 = test_input($_POST["q16"]);
  }
  
  if (empty($_POST["q17"])) 
  {
    $answer17 = "";
  } 
  else 
  {
    $answer17 = test_input($_POST["q17"]);
  }
  
  if (empty($_POST["q18"])) 
  {
    $answer18 = "";
  } 
  else 
  {
    $answer18 = test_input($_POST["q18"]);
  }
  
  if (empty($_POST["q19"])) 
  {
    $answer19 = "";
  } 
  else 
  {
    $answer19 = test_input($_POST["q19"]);
  }
  
  if (empty($_POST["q20"])) 
  {
    $answer20 = "";
  } 
  else 
  {
    $answer20 = test_input($_POST["q20"]);
  }
}  
function test_input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$total = 0;
if($answer1 == "1" )
{$total++;}
if($answer2 == "1" )
{$total++;}
if($answer3 == "1" )
{$total++;}
if($answer4 == "1" )
{$total++;}
if($answer5 == "1" )
{$total++;}
if($answer6 == "1" )
{$total++;}
if($answer7 == "1" )
{$total++;}
if($answer8 == "1" )
{$total++;}
if($answer9 == "1" )
{$total++;}
if($answer10 == "1" )
{$total++;}
if($answer11 == "1" )
{$total++;}
if($answer12 == "1" )
{$total++;}
if($answer13 == "1" )
{$total++;}
if($answer14 == "1" )
{$total++;}
if($answer15 == "1" )
{$total++;}
if($answer16 == "1" )
{$total++;}
if($answer17 == "1" )
{$total++;}
if($answer18 == "1" )
{$total++;}
if($answer19 == "1" )
{$total++;}
if($answer20 == "1" )
{$total++;}

echo "Your Score :<div id = 'results'>$total / 20</div>";
Echo "<a href=pay.html>Click Here To Proceed</a>"


?>