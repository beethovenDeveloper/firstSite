<?php
   class Galery
   {
   	   private $parentFolderName;
   	   private $mainFolderName;
   	   private $pathName;

   	   public function __construct()
   	   {
   	   	   if(isset($_GET("pathF")))
   	   	   {
   	   	   	   if(isset($_GET("fold")))
   	   	   	   {
                   $this->parentFolderName=$_GET["pathF"];
                   $this->mainFolderName=$_GET["fold"];   	   	   	   	
   	   	   	   }
   	   	   }
   	   }

   	   public function createAlbom()
   	   {
   	   	   echo $this->$parentFolderName;
   	   }
   }
?>
