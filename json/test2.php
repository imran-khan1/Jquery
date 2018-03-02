<?php
//print_r($_POST);

echo "Converted to JSON:  ". $json_data = json_encode($_POST ); 
 
$data = json_decode($json_data);
echo "<br><br>";

echo $data->pet[1]->species;
echo "<br>";
echo $data->myname;
echo "<br><br>";
       
 echo "<br><br>";

?>
<form method="post" action="" enctype='application/json'>
  <input name='pet[0][species]' value='Dahut'>
  <input name='pet[0][name]' value='Hypatia'>
  <input name='pet[1][species]' value='Felis Stultus'>
  <input name='pet[1][name]' value='Billie'>
    <input name='myname' value='Jin'>

  <input type="submit" >
</form>