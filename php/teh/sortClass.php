<?php
  function sortBubbleMethod($array)
  {
  	 $a=$array;
  	 for($i=1;$i<count($a);$i++)
  	 {
  	 	for($j=count($a)-1;$j>$i;$j--)
  	 	{
  	 		if($a[$j-1]<$a[$j])
  	 		{
  	 			$data=$a[$j-1];
  	 			$a[$j-1]=$a[$j];
  	 			$a[$j]=$data;
  	 		}
  	 	}
  	 }
  	 return $a;
  }

  function sortSelectionMethod($array)
  {
  	$a=$array;
  	$data=0;
  	$index=0;
  	for($i=0;$i<count($a);$i++)
  	{
  		$data=$a[$i];
  		$index=$i;
  		for($j=$i+1;$j<count($a);$j++)
  		{
  			if($a[$j]>$data)
  			{
  				$data=$a[$j];
  				$index=$j;
  			}
  		}
  		if($a[$index]!=$a[$i])
  		{
  			$a[$index]=$a[$i];
  			$a[$i]=$data;
  		}
  	}
     return $a;
  }

  function sortInputMethod($array)
  {
  	$a=$array;
  	$j=0;
  	$data=0;
  	for($i=0;$i<count($a);$i++)
  	{
  		$data=$a[$i];
  		for($j=$i-1;(($j>=0) && ($a[$j]<$data));$j--)
  		{
  			$a[$j+1]=$a[$j];
  		}
  		$a[$j+1]=$data;
  	}
  	return $a;
  }
?>