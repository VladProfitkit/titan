<?
$result = mail('mabeev@gmail.com', 'subject', 'message');

if($result)
{
	echo 'good';
}
else
{
	echo 'not good';
}
?>
