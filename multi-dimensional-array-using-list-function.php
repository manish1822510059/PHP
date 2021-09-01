<?php
$emp = [
       [1,"Manish","Manager",80000000],
       [2,"Sajul","Computer Engineer",200000],
       [3,"Mohan","Helper",15000],
       [4,"sagar","Sales Assistant",500000],
       [5,"sagar","Sales Assistant",500000],
];
echo "<table border='1px' cellpadding='8px' cellspacing='0'> 
<tr>  
     <th>Emp id</th> 
      <th>Name</th> 
      <th>Designation</th> 
      <th>Salary</th> 

  </tr>




";
foreach($emp as list($id,$name,$designation,$salary)){
    echo "<tr><td>$id</td><td>$name</td><td>$designation</td> <td>$salary</td></tr>";" $salary</td></tr>";


}
echo "</table>";
