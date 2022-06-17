<?php
function checkUserEligiblityToVote()
{
    $age = 18;
    $name = "Loco Mk";
    if ($age >= 18)
    {
        echo $name ." ÿou are eligible to vote";
    }
    else{
        echo $name. " ÿou are eligible to vote";
    }
}
//checkUserEligiblityToVote()


   function studentgrade()
   {
    $marks =51;
    if($marks >=80)
    {
        $grade ="A plain";
    }
    else if($marks >=75)
    {
        $grade ="A -";
    }
    else if($marks >=70)
    {
        $grade ="B+";
    }
    else if($marks >=65)
    {
        $grade ="B";
    }
    else if($marks >=60)
    {
        $grade ="B-";

    }
    else if($marks >=50)
    {
        $grade ="C+";
    }
    else
    {
        $grade ="FAIL";
    }
    echo "your score is:". "$grade";
   }
   studentgrade();




?>