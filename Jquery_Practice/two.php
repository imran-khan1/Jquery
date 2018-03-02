<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
.red
{
	color:red;
}
</style>
<title>Jquery One</title>

<script src="jquery-2.1.4.js"></script>
</head>
<script>

/*
//Method 1 of checking DOM is Ready
$(document).ready(function() {
   $('li:first-child').addClass('red'); 
});*/


//Method 2 of checking DOM is Ready
$(function() {
   $('li:first-child').addClass('red'); 
});


</script>




<body>

<ul>
<li>Hello</li>
<li>Hello</li>
<li>Hello</li>
</ul>

</body>
</html>