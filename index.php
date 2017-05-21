<!DOCTYPE html>
<html lang="ru">
  <head>
    <?PHP //header("Content-Type: text/html; charset=utf-8");?>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Сайт школы</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
  <!-- menu sity -->
  <div class="container">
       <div class="row">
           <div class="navbar navbar-inverse">
               <div class="container">
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu"></button>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <button>
                   </div>
                   <div class="collapse navbar-collapse" id="responsive-menu">
                       <ul class="nav navbar-nav">
                           <li><a href="#">su</a></li>
                           <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">su<b class="caret"></b></a>

                               <ul class="dropdown-menu">
                                  <li><a href="#">Path1</a></li>
                                  <li><a href="#">Path1</a></li>
                                  <li><a href="#">Path1</a></li>
                                  <li><a href="#">Path1</a></li>
                                  <li><a href="#">Path1</a></li>
                                  <li><a href="#">Path1</a></li>

                               </ul>
                           </li>
                           <li><a href="#">su</a></li>
                           <li><a href="#">su</a></li>
                       </ul>
                   </div>
               </div>
           </div>
       </div>
  </div>

  <!-- main codi php -->
  <?php
       include 'php/block/news/newsCreator.php';
       include 'test.php';
  ?>


<!-- main body -->

  <div class="container">
        <div class="row">
           <div class="col-md-8">
           <?php
              createRowAndCol(1);
              createRowAndCol(2);
              createRowAndCol(3);
            ?>
           </div>
           <div class="col-md-4">1</div>
        </div>
  </div>
  <br>

  <!-- galery panel -->
<div class="container" style="background-color:#333333;">

  <div class="row" style="background-color:#333333;">

         <div class="col-md-2">
               <div class="btn-group">
               <br><br>
                   <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">выбрать альбом</button>
                  <ul class="dropdown-menu">

                     <?php
                        $dirs=opendir("galery/");
                        for($i=0;$d=readdir($dirs);$i++)
                        {
                          if(($d==".")||($d=="..")||($d=="galery.xml"))
                          {

                          }
                          else
                          {
                          echo "<li><a href='index.php?fold=".urlencode($d)."'>";
                          echo mb_convert_encoding($d,"UTF-8","Windows-1251");
                          echo "</a></li>";
                          }
                        }
                     ?>
                 </ul>
               </div>
         </div>
           <div class="col-md-10" style="height:120px;overflow-x: scroll;">
              <?php
                  $j=0;
                  $k=0;
                  $link=$_GET["fold"];
                  $link=urldecode($link);
                  $dd=opendir("galery/".$link);
                  for($i=0;$d1=readdir($dd);$i++)
                  {

                    if(($d1!=".")&&($d1!="..")&&($d1!="galery.xml"))
                    {
                       echo "<div class='galerysMenu'  style='height:100px;width:150px;margin-left:".$j."px;margin-top:".$k."px;text-align:center;' nameFold='".urlencode($d1)."' fold='".urlencode($_GET["fold"])."'><br><span class='glyphicon glyphicon-folder-open' style='font-size:40px;color:yellow;'></span><br>".mb_convert_encoding($d1,"UTF-8","Windows-1251")."</div>";
                      $j=$j+150;
                      if($j>99)
                      {
                        $k=-100;
                      }
                    }
                  }
              ?>
           </div>
  </div>
  <div id="carousel" class="carousel slide" data-ride="carousel">
      <ul class="carousel-indicators">
         <li class="active" data-target="#carousel" data-slide-to="0"></li>
         <li data-target="#carousel" data-slide-to="1"></li>
         <li data-target="#carousel" data-slide-to="2"></li>
      </ul>

      <div class="carousel-inner">
        <?php createBodyAlbom(); ?>
        <!--  <div class="item active">
           <img src="image/1.jpg" alt="...">
           <div class="carousel-caption">
           <h2>slide number one</h2>
           <p>one</p>
           </div>
         </div>
         <div class="item">
           <img src="image/2.jpg" alt="...">
           <div class="carousel-caption">
           <h2>slide number one</h2>
           <p>one</p>
           </div>
         </div>
         <div class="item">
           <img src="image/3.jpg" alt="...">
           <div class="carousel-caption">
           <h2>slide number one</h2>
           <p>one</p>
           </div>
         </div> -->
      </div>

      <a href="#carousel" class="left carousel-control" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span>
      </a>

      <a href="#carousel" class="right carousel-control" data-slide="prev"><span class="glyphicon glyphicon-chevron-right"></span>
      </a>
  </div>
</div>

<!-- end galery panel -->

<div class="container">
    <div class="row">
        <div class="col-md-12" style="margin-top:10px;height:200px;background:black;">
          <?php
             //createListCaptureForAlbom();
          ?>
        </div>
    </div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
               <script>
               $(".galerysMenu").on("click", function(){
                  var urlMain="index.php?pathF="+$(this).attr("nameFold")+"&fold="+$(this).attr("fold");
                  $(location).attr('href',urlMain);
               });
           </script>
  </body>
</html>