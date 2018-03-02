<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Jquery One</title>
<link rel="stylesheet" href="css/style2.css" type="text/css" />
</head>

<body>
<div class="container">
<table width="100%">
<tr><td width="718">
 <div class="level">
    <ul>
    <li>Level 1</li>
    
    <li> 
    
         <ul>
            <li>Hello</li>
            <li>Hello</li>
            <li>Hello</li>
            <li>
               <ul id="aaa">
                    <li id="zzz"> Child of li</li>
                    <li> More Childs of li</li>
                    <li>
                    	<ul> <!-- multiple level up parent can't find it but closest goes until it will found it -->
                           <li> Test Grandest 2nd last </li>
                            <li>
                              <p> <b>Closest goes all level up in ancestors and stops when it founds the element. While parent goes one level up only and stops if element doesnot match. Here <font color="red" >$j('#iii').parent('ul').addClass('red');</font> will not work, Because parent can only reach to this level <font color="red">$j('#iii').parent('li').addClass('red');</font></b>
                                 <div id="iii"> iii is this one </div>
                                 <div> Test Grandest </div>
                                 <div> Test Grandest </div>
                                 <div> Test Grandest </div>
                              </p>                    
                               
                               
                           </li>
                           
                        </ul>
                    </li>            
               </ul>
            </li>
            <li>Hello</li>
            <li>Hello</li>
            <li>Hello</li>
          </ul>
      
      </li>
      
   <li>Level 3</li> 
   </ul>  
 </div>     
 </td>
 <td width="268">
 <p><a href="#" id="find" class="find"> Find </a> </p>
 <p><a href="#" id="children" class="children"> Children </a> </p>
 <p><a href="#" id="closest" class="closest"> Closest </a> </p>
 <p><a href="#" id="parent" class="parent"> Parent </a> </p>
 <p><a href="#" id="parents" class="parents"> Parents </a> </p>

 </td>
 </tr>   
   </table>
   
   
   
   <br /><br />
   <div style="background-color:#E1E1E1; padding:15px;">
   <p><b class="find">.find()</b> It will go all levels below and gets the matching elements</p> 
   <p><b class="children">.children()</b> It will go one level below and gets the matching elements</p> 
   <p><b class="parent">.parent()</b> It will go one level up and gets the matching element</p>
   <p><b class="closest">.closest()</b> It will go all level up to the ancestor parents until gets the matching element</p> 
   <p><b class="parents">.parents()</b> It will go all levels up and gets the all ancestors matching elements</p>    
   </div>
   
    
   
   
</div>


<script src="js/jquery-2.1.4.js"></script>
<script src="js/combined2.js"></script>


</body>
</html>