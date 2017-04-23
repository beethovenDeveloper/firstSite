<?php
   include 'php/teh/sortClass.php';
   include 'xmlProcessing.php';
   include 'php/template/bootstrapTemplate.php';
   function createRowAndCol($index)
   {
   	   $arrays;
       $vision="";
   	   if($index=="1")
   	   {
   	   	  $arr=fileSort();
   	   	  for($i=0;$i<2;$i++)
   	   	  {
   	   	  	$arrays[$i]=$arr[$i];
   	   	  }
   	   }
       else if($index=="2")
       {
       	  $arr=fileSort();
   	   	  for($i=2;$i<5;$i++)
   	   	  {
   	   	  	$arrays[$i-2]=$arr[$i];
   	   	  }
       }else if($index=="3")
       {
          $vision="hidden-xs";
          $arr=fileSort();
          for($i=5;$i<7;$i++)
          {
            $arrays[$i-5]=$arr[$i];
          }
       }

   	   echo "<div class='row ".$vision."'>";

             echo "<div class='".colTemplateMin(6,12)." newsCell'>";
                echo newXmlBlock("file/news/".$arrays[0]);
             echo "</div>";

             echo "<div class='".colTemplateMin(6,12)." newsCell'>";
                echo newXmlBlock("file/news/".$arrays[1]);
             echo "</div>";

   	   echo "</div>";
   }

   function fileSort()
   {
   	  $masDateFiles;
   	  $arrayFiles;
   	  $dir=opendir("file/news");
   	  $ins=0;
   	  for($i=0;$dirs=readdir($dir);$i++)
   	  {
   	  	if(($dirs==".")||($dirs=="..")||($dirs=="image"))
   	  	{

   	  	}
   	  	else
   	  	{
   	     	$masDateFiles[$ins]=stat("file/news/".$dirs)[9];
   	     	$ins++;
   	    }
   	  }

   	  $runs=0;
      $masDateFiles=sortSelectionMethod($masDateFiles);

      for($j=0;$j<count($masDateFiles);$j++)
      {
      	rewinddir($dir);
      	for($i=0;$dirs=readdir($dir);$i++)
      	{
             $num1=(int)stat("file/news/".$dirs)[9];
             $num2=(int)$masDateFiles[$j];
             if($num1==$num2)
             {
             	$arrayFiles[$runs]=$dirs;
             	$runs++;
             }
      	}
      }
      return $arrayFiles;
   }

   function sortBubble($arrayData)
   {
   	  $arraySort=$arrayData;
   	  for($i=1;$i<count($arraySort);$i++)
   	  {
   	  	for($j=count($arraySort)-1;$j>=$i;$j--)
   	  	{
   	  		$int1=(int) $arraySort[$j-1];
   	  		$int2=(int) $arraySort[$j];
   	  		if($int1<$int2)
   	  		{
               $temp=$arraySort[$j-1];
               $arraySort[$j-1]=$arraySort[$j];
               $arraySort[$j]=$temp;
   	  		}
   	  	}
   	  }
   	  return $arraySort;
   }
?>