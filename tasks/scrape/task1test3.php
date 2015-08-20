<html>
	<head>
		<title>JQuery Task One Test Three</title>
		<meta charset="utf-8">
                 
	</head>
	<body>

<style>
.TEST1{
    border-color:red;
}

.TEST2{
    border-color:blue;
}

</style>
<h1>Task One Test Three</h1>
<h2>Reference Fragments</h2>
<h3>REGEX /^[a-zA-Z]{7}$/  not more not less than seven characters</h3>


<?php

$ch = curl_init("http://www.registrar.usf.edu/ssearch/data/dept.php");
$html = curl_exec($ch);
//echo $html;

?>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript">
//$( "tr:gt(4)" ).css( "backgroundColor", "yellow" );
//$( "tr:gt(-2)" ).css( "color", "red" );
$( "td:odd" ).css( "background-color", "#bbf" );
$( "td:contains('AS')" ).css( "background-color", "#ffff00" );
$( "td:contains('IAS')" ).css( "background-color", "#ff0000" );
$( "td:contains('LAS')" ).css( "background-color", "#ff0000" );
$( "td:contains('AST')" ).css( "background-color", "orange" );

//alert( "Size: " + $( "td:contains('AS')" ).length );

//$("td:contains('AS')").filter('AS').css("background-color", "blue");


$("td:contains('AS')").filter(function(index) {
	if(index==2 || index==3){ //0 index based
		return true;
	}
}).css('background-color', 'blue');

</script>


<!-- source http://api.jquery.com/html/ -->

</body>
</html>
