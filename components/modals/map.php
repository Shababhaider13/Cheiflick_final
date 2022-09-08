<?php 

if(isset($_REQUEST['sql']))
{

     $search = $_REQUEST['sql'];

        $search = str_replace(" ", "+", $search);
       $iframe= '<iframe class="map-custom" width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q='.$search.'&output=embed"></iframe>';
echo $iframe;

}
else {
  $iframe=' <iframe class="map-custom" width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(Sofrah)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
    </iframe>';
    echo $iframe;

}
?>