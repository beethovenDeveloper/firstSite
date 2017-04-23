<?php

    //column news block for site school
    function colTemplate($i)
    {
    	$s="col-xs-".$i." col-sm-".$i." col-md-".$i." col-lg-".$i;
    	return $s;
    }
    function colTemplateMin($i,$j)
    {
    	$s="col-xs-".$j." col-sm-".$i." col-md-".$i." col-lg-".$i;
    	return $s;
    }

    function colTemplateHide($i)
    {
    	$s=" col-sm-".$j." col-md-".$i." col-lg-".$i."col-xs-hide";
    	return $s;
    }

    function colTemplateTotal($a,$b,$c,$d)
    {
    	$s="col-xs-".$d." col-sm-".$c." col-md-".$b." col-lg-".$a;
    	return $s;
    }
?>