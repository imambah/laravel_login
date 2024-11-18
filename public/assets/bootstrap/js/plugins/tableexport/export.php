<?php

include 'links.php';
include 'koneksi.php';
if($_SESSION['level'] != "Admin"){  
  echo "<script>document.location='login.php'</script>";
}


$q = "
    SELECT * FROM salary_all_ INTO OUTFILE '/salary_all.csv'
    FIELDS TERMINATED BY ','
    ENCLOSED BY '\"'
    LINES TERMINATED BY '\n';
";

$result = mysql_query($q);


?>