<?php 
$con=mysqli_connect("localhost","root","", "dbjquery");  

$result=mysqli_query($con, "select * from tbluser");

echo "<table border='1' width='50%'>
<tr>
<td align=center><b>ID</b></td>
<td align=center><b>Name</b></td>
<td align=center><b>Date Added</b></td></td>
</tr>";

while($data = mysqli_fetch_row($result))
{   
    echo "<tr>";
    echo "<td align=center>$data[0]</td>";
    echo "<td align=center>$data[1]</td>";
    echo "<td align=center>$data[2]</td>";
    echo "</tr>";
}
echo "</table>";  
?>