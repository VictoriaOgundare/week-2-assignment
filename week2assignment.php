<?php
         $voterage="25";
        $votercard="Present";
        $voterward="020";
  
      if ($voterage >="18" && $votercard ="Present" && $voterward="020")
  {echo "This User is eligible to vote";}
  else {echo "This User is not eligible to vote";}
    
 echo"<br>";

  $voterage="16";
  $votercard="Present";
  $voterward="020";
  
      if ($voterage >="18" && $votercard ="Present" && $voterward="020")
  {echo "This User is eligible to vote";}
  else {echo "This User is not eligible to vote";}

  echo"<br>";

  $voterage="16";
  $votercard="Absent";
  $voterward="022";
  
      if ($voterage >="18" && $votercard ="Present" && $voterward="020")
  {echo "This User is eligible to vote";}
  else {echo "This User is not eligible to vote";}



?>