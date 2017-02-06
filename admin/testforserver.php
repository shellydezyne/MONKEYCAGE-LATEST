<?php

include("db.php");


$update = "SELECT * FROM main";



   $run_insert_product = mysql_query( $update, $conn );
 
  while ($row_prod = mysql_fetch_array($run_insert_product)) {
     

     $tf1 = $row_prod['tf1'];

echo $tf1;

  }
  

 {
    echo "Error: " . $update .  "<br>" . mysqli_error($conn);

   }



?>
