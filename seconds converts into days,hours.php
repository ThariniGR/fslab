<?php
// PHP program to convert seconds
// into days, hours,minutes,seconds
 
// function convert second into day
// hours, minutes and seconds
function ConvertSectoDay($n)
{
    $day = floor($n / (24 * 3600));
 
    $n = ($n % (24 * 3600));
    $hour = $n / 3600;
 
    $n %= 3600;
    $minutes = $n / 60 ;
 
    $n %= 60;
    $seconds = $n;
     
echo ("$day days $hour hours $minutes minutes $seconds seconds");
         
}
 
// Driver code
{
     
    // Given n is in seconds
    $n = 129600;
    ConvertSectoDay($n);
    return 0;
}
 
// This code is contributed by Nitin Mittal.
?>
