<html>
	<head>
		<title>JQuery Task One Test Eleven</title>
		<meta charset="utf-8">
                 
	</head>
	<body>


<h1>Task One Test Eleven</h1>



<?php

$ch = curl_init("http://www.registrar.usf.edu/ssearch/data/dept.php");
$html = curl_exec($ch);
//echo $html;

?>

<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript">

$( "td:odd" ).css( "background-color", "#bbf" );
//$( "td:contains('AS')" ).css( "background-color", "#ffff00" );
$( "td:contains('IAS')" ).css( "background-color", "#ff0000" );
$( "td:contains('LAS')" ).css( "background-color", "#ff0000" );
$( "td:contains('AST')" ).css( "background-color", "orange" );

</script>

<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript">

<!-- start here generically trying to isolate out a parens and it works, but turned the whole td green because they all had parens-->
$( "td:contains('\50AS\)')").css("background-color", "green" );
$( "td:contains('\50IAS\)')").css("background-color", "blue" );
<!-- http://www.javascriptkit.com/jsref/regexp.shtml -->
<!-- end isolate out a parens with regex this finally works on the specific -->


<!-- start modified from https://api.jquery.com/closest/#closest-selector-context-->
$( "td:contains('\50AS\)')").siblings( "td" ).css( "background-color", "#663399" );
<!-- end https://api.jquery.com/closest/#closest-selector-context-->

<!-- start http://api.jquery.com/bind/-->
var special = $("tr:contains('\50AS\)')").children("td");
var purple = $("td:contains('\50AS\)')").siblings( "td" ).css( "background-color", "#663399" );  
$( "td:contains('\50AS\)')").bind( "click", function() {
  //alert( "You are high lighting code 'AS'" );
  //purple.css( "opacity", 0 );
  //purple.toggle( "slow" );
  //$( "td" ).not("td:contains('\50AS\)')").siblings( "td" ).css( "background-color", "red" );
  //$( "td" ).not("td:contains('\50AS\)')").closest( "td" ).css( "background-color", "red" );
  //$( "td" ).not(purple).css( "background-color", "red" ); 
  $( "td" ).not(special).css( "background-color", "red" ); 
 
});

<!-- end http://api.jquery.com/bind/ -->

</script>


</body>
</html>
