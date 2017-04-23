<?php
    function newXmlBlock($nameFile)
    {
    	$content=file_get_contents($nameFile);
    	$rss=new SimpleXMLElement($content);
        //row titile for block news
        echo "<div class='row'>";
            //image for news block
            echo "<div class='col-md-2' style='height:70px;'><img src='".$rss->xpath("//image")[0]."'></div>";
            //title for news blcok
            echo "<div class='col-md-10' style='font-size:24px;'>".$rss->xpath("//title")[0]."</div>";
        echo "</div>";
        
        //row main content for news block
        echo "<div class='row'>";
              echo "<div class='col-md-12' style='height:70px;'>".$rss->xpath("//text")[0]."</div>";
        
        echo "</div>";

        //row bottom content for news block

        echo "<div class='row'>";
             //author of news
             echo "<div class='col-md-6' style='height:30px;'>".$rss->xpath("//author")[0]."</div>";
             //date of news
             echo "<div class='col-md-6'>".$rss->xpath("//date")[0]."</div>";
        echo "</div>";
    }
?>