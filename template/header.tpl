<?php
ob_start();//this just buffers the header so that you dont recieve an error for returning to the same page
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html>
<head>

	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta http-equiv="content-style-type" content="text/css" />
	<meta http-equiv="content-language" content="nl-nl" />
	<meta http-equiv="imagetoolbar" content="no" />
	<meta name="resource-type" content="document" />
	<meta name="distribution" content="global" />
	<meta name="copyright" content="2008 Divigo Stables" />
	<meta name="keywords" content="" />

	<link rel="stylesheet" type="text/css" href='styles/common.css'/>
    <link rel="stylesheet" type="text/css" href='styles/menu.css'/>
    <link rel="stylesheet" type="text/css" href='styles/toggle.css'/>
    <link rel="stylesheet" type="text/css" href='styles/imagepopup.css'/>
    
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>


<script type="text/javascript">
jQuery(document).ready(function() {
  jQuery(".content").hide();
  //toggle the componenet with class msg_body
  jQuery(".heading").click(function()
  {
    jQuery(this).next(".content").slideToggle(500);
  });
});
</script>

<title>
<?php
echo "Schoonheidssalon Bij Suus --> $page_id";
?>
</title>


</head>

<body>