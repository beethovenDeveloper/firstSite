<?php
    $content=file_get_contents("Rozcklad.xml");
    $xml=new SimpleXMLElement($content);
    echo $xml->xpath("//date")[0];
    foreach($xml->xpath("//class") as $lesson)
    {
    	echo $lesson;
    }
?>