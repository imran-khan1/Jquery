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
<body>
<div class="container">

        <div class="level">
        <ul>
        <li>Hello</li>
        <li>Hello</li>
        <li>Hello</li>
        <li>
        	<ul>
            <li> Child of li</li>
            </ul>
        </li>
        </ul>
        </div>
        
        <div class="level">
        <ul>
        <li>Hello</li>
        <li>Hello</li>
        <li>Hello</li>
        </ul>
        </div>
        
        <div id="test">
         <div id="monkey">This is monkey child of p tag </div>
        </div>

</div>

<div class="container">

        <div class="level">
        <ul>
        <li>Hello</li>
        <li>Hello</li>
        <li>Hello</li>
        <li>
        	<ul id="test">
            <li> Child of li</li>
            </ul>
        </li>
        </ul>
        </div>
        
        <br />
        <div class="level">
        <ul id="ctext">
        <li>Hello</li>
        <li>Hello</li>
        <li>Hello</li>
        <li>Hello</li>
        <li>Hello</li>
        </ul>
        </div>
        
        <div id="test2">
         <div id="monkey">This is monkey child of p tag </div>
        </div>
        
        <li id="me">
        This text will be appended.
        </li>

</div>
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
   //$('ul').children('li').eq(1).addClass('red'); 
   
  // $('ul').parent('li').addClass('red'); 
   
  // $('div#monkey').parent('div#test2').hide(); 
   
  // $('div#monkey').parent('div#test2').show().addClass('red');
   
  // $('ul').find('li').removeClass('red');
   
  // $('ul').closest('li').addClass('red');
   
  // $('ul').closest('#test').append( $( "#me" ) );
	
  // $('ul#test').append( $( "#me" ) );
	 
     $('ul').find('#test').append( $( "#me" ) ).addClass('red') ;
   
  // $('ul').parents('.level').addClass('red');
  // $('ul').parents('.container').addClass('red');
   
     $('ul#ctext li').eq(0).next().text('I am newly added Text on line 2.');
     $('ul#ctext li').eq(3).prev().text('I am newly added Text on line 3.');
     $('ul#ctext li').eq(4).text('I am newly added Text on line 5.');
   
   
});


</script>

</body>
</html>