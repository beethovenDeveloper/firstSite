<?php

     function codingSimForNameFold($str)
     {
     $s=$str;
     $i=strlen($s);
     $st="";
     for($j=0;$j<$i;$j++)
     {

     	$sim=substr($s, $j,$j+1);
     	$d=ord($sim);
     	if($d>127)
     	   {
     	    $d=$d-127;
     	    $st=$st.chr($d);
           }
        else
           {
             $st=$st.chr($d);
           }
     }
     return $st;
     }


     function decodSimForNameFold($str)
     {
     $s=$str;
     $i=strlen($s);
     $st="";
     for($j=0;$j<$i;$j++)
     {

     	$sim=substr($s, $j,$j+1);
     	$d=ord($sim);
     	if($d>127)
     	   {
     	    $d=$d-127;
     	    $st=$st.chr($d);
           }
        else
           {
             $st=$st.chr($d);
           }
     }
     return $st;
     }
?>