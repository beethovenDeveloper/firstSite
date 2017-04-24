
<?php
   //method for create main albom
   function createAlbomForSite()
   {
       echo "<div id='carousel' class='carousel slide' data-ride='carousel'>";

       echo "</div>";
   }
    
   function createListCaptureForAlbom()
   {
   	   $nameFolder=$_GET["pathF"];
	   $fold=$_GET["fold"];
	   $nameFolder=urldecode($nameFolder);
	   $fold=urldecode($fold);

	   $dd1= mb_convert_encoding($nameFolder,"UTF-8","Windows-1251");

	   $dd2= mb_convert_encoding($fold,"UTF-8","Windows-1251");

	   $ddddd="galery/".$dd2."/".$dd1;


	   // $dd1= mb_convert_encoding($nameFolder,"Windows-1251","UTF-8");

	   // $dd2= mb_convert_encoding($fold,"Windows-1251","UTF-8");

	   // $ddddd="galery/".$dd2."/".$dd1;
       

       $content=file_get_contents("'".$ddddd."/galery.xml'");
       $rss=new SimpleXMLElement($content);
       foreach($rss->xpath('//img') as $listImage)
       {
       	 echo $listImage;
       }
   }

   function createBodyAlbom()
   {
   $nameFolder=$_GET["pathF"];
   $fold=$_GET["fold"];
   $nameFolder=urldecode($nameFolder);
   $fold=urldecode($fold);

   $dd1= mb_convert_encoding($nameFolder,"UTF-8","Windows-1251");

   $dd2= mb_convert_encoding($fold,"UTF-8","Windows-1251");

   $ddddd="galery/".$dd2."/".$dd1;
   galeryImage($ddddd);
   }

   function galeryImage($rrrrrrrrr)
   {
   $nameFolder=$_GET["pathF"];
   $fold=$_GET["fold"];
   $nameFolder=urldecode($nameFolder);
   $fold=urldecode($fold);
   $nameFolder= mb_convert_encoding($nameFolder,"UTF-8","Windows-1251");
   $fold= mb_convert_encoding($fold,"UTF-8","Windows-1251");
   $drrr="galery/".mb_convert_encoding($fold,"Windows-1251","UTF-8")."/".mb_convert_encoding($nameFolder,"Windows-1251","UTF-8");
   $dirs1=opendir("".$drrr);
   $rere=0;
   for($i=0;$ddd=readdir($dirs1);$i++)
   {
   	if(($ddd!=".")&&($ddd!=".."))
   	   {
   	   	   if($rere==0)
   	   	   {
                 echo "<div class='item active'>";
                 $rere=$rere+1;
   	   	   }
   	   	   else
   	   	   {
                 echo "<div class='item'>";
   	   	   }
   	   	   echo "<img src='".$rrrrrrrrr."/".$ddd."' alt='..'>";
           echo "<div class='carousel-caption'>";
           echo "<h2>slide number one</h2>";
           echo "<p>one</p>";
           echo "</div>";
           echo "</div>";

            //cho "<img src='".$rrrrrrrrr."/".$ddd."' alt='..'>";
        	// echo "<img src='galery/".mb_convert_encoding("Выпускные","Windows-1251","UTF-8")."/".mb_convert_encoding("ввввввввв1","Windows-1251","UTF-8")."/".mb_convert_encoding($ddd,"Windows-1251","UTF-8")."'>";
       }
   }
   closedir($dirs1);
   }
?>