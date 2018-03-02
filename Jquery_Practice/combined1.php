<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Combined1</title>
</head>
<link type="text/css" href="css/style.css" rel="stylesheet"/>
<body>
<div class="container">
<table width="100%">
<tr>
<td valign="top">
<div id="div1">The class will be added here</div>
<div id="div2">
	 <ul>
        <li>Hello 1</li>
        <li>Hello 2</li>
        <li>Hello 3</li>
        <li>Hello 4</li>
        <li>Hello 5</li>
        <li>Hello 6</li>
        <li>Hello 7</li>
        <li>Hello 8</li>
        <li>Hello 9</li>
        <li>Hello 10</li>
        <li>Hello 11</li>
	</ul>
</div>       

<br /><br /><br />
<form id="test-form">
<table width="729">
<tr>
<td width="73"><strong>Name</strong></td>
<td width="359"><div id="div3"><input type="text" name="uname"  id="uname" value="Imran Khan"/></div>
</tr>

<tr>
<td><strong>CheckBox1</strong></td>
<td><div id="div4"><input type="checkbox" name="chk1"  id="chk1" /> </div></td>
</tr>

<tr>
<td><strong>CheckBox2</strong></td>
<td><div id="div5"><input type="checkbox" name="chk2"  id="chk2" /> </div></td>
</tr>


<tr>
<td><strong>CheckBox3</strong></td>
<td><div id="div6"><input type="checkbox" name="chk3"  id="chk3" /> </div></td>
</tr>


<tr>
<td><strong>CheckBox4</strong></td>
<td><div id="div7"><input type="checkbox" name="chk4"  id="chk4" /> </div></td>
</tr>


<tr>
<td><strong>CheckBox5</strong></td>
<td><div id="div8"><input type="checkbox" name="chk5"  id="chk5" /> </div></td>
</tr>


<tr bgcolor="#BCEDE8">
<td><strong>Agree</strong></td>
<td><div id="div9"><input type="checkbox" name="agree"  id="agree" /> </div></td>
</tr>


</table>
</form>
 </td>
 
 <td valign="top" bgcolor="#FFFFFF">
 <p><a href="#" class="focus" id="set-focus" >Focus to Name</a></p>
 
 <p><a href="#" class="hdiv1" id="add-div1-class" >Add Class to DIV</a></p>
 <p><a href="#" class="hdiv1" id="rem-div1-class">Remove Class from DIV</a></p>
 
 <p><a href="#" class="hdiv2" id="add-li-first-class">Add Class to li</a></p>
 <p><a href="#" class="hdiv2" id="rem-li-first-class">Remove Class from li</a></p>
 
 <p><a href="#" class="hdiv2" id="add-li-fourth-class">Add Class to 4th li</a></p>
 <p><a href="#" class="hdiv2" id="rem-li-fourth-class">Remove Class from 4th  li</a></p>
 
 <p><a href="#" class="hdiv2" id="add-li-last-class">Add Class to last li</a></p>
 <p><a href="#" class="hdiv2" id="rem-li-last-class">Remove Class from last li</a></p>
 
 <p><a href="#" class="hdiv2" id="add-li-sixth-class">Add Class to 6th li via .next()</a></p>
 <p><a href="#" class="hdiv2" id="rem-li-sixth-class">Remove Class from 6th li</a></p>
 
 <p><a href="#" class="hdiv2" id="add-li-eighth-class">Add Class to 8th li via .prev()</a></p>
 <p><a href="#" class="hdiv2" id="rem-li-eighth-class">Remove Class from 8th li</a></p>

  
 <p><a href="#" class="hdiv3" id="add-form-class">Add Class to TextBox</a></p>
 <p><a href="#" class="hdiv3" id="rem-form-class">Remove Class from TextBox</a></p>
   
  <p><a href="#" class="hdiv4" id="chk-all">Check All CheckBoxes</a></p>
  <p><a href="#" class="hdiv4" id="uncheck-all">UnCheck All CheckBoxes </a></p>


  <p><a href="#" class="hdiv4" id="chk-agree">CheckBox Agree</a></p>
  <p><a href="#" class="hdiv4" id="uncheck-agree">UnCheck Agree CheckBox </a></p>
 </td>
 </tr>
 </table>       
       

</div>
<script src="js/jquery-2.1.4.js"></script>

<script src="js/combined1.js"></script>

</body>
</html>