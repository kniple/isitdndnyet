<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01//EN'
'http://www.w3.org/TR/html4/strict.dtd'>
<html>
    <head>
        <meta http-equiv='Content-Type' content='text/html;charset=utf-8'>
        <title>Is it Dungeons and Dragons yet?</title>
        <link href="defaultstyles.css" rel="stylesheet" type="text/css">
    </head>
    <body>
<?php
$today = date('l');
echo("<div style='margin-left: auto; margin-right: auto; font-size: xx-large; text-align: center;'>");
if($today == "Wednesday")
{
	$GameTime = strtotime('today 17:30');
	$DiffTime = $GameTime - time();
	if ( $DiffTime > 0 )
	{
		$DiffTime = date('H:i:s',$DiffTime);
		echo("Today is DnD5! Only " . $DiffTime . " left!");
	}
	else
	{
		echo "DnD5 is right now (or you missed it..!)";
	}
}
elseif($today == "Tuesday")
{	
	$GameTime = strtotime('today 17:30');
	$DiffTime = $GameTime - time();
	if ( $DiffTime > 0 )
	{
		$DiffTime = date('H:i:s',$DiffTime);
		echo("Today is DnD4! Only " . $DiffTime . " left!");
	}
	else
	{
		echo "DnD4 is right now (or you missed it..!)";
	}

}
else
{
	echo("No.");
	echo("<p style='font-size:xx-small;'><br />But in your heart, there will always be fantasies akin to those of the wonderful world of make believe lives.</p>");
}
echo("</div>");
?>
